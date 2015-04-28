# Basics
Exec {
  path => ['/usr/bin', '/bin', '/usr/sbin', '/sbin', '/usr/local/bin', '/usr/local/sbin']
}
exec { 
    'apt-get update':
        command => '/usr/bin/apt-get update';
}
package { 
	'make':
		ensure  => present,
		require => Exec['apt-get update'];
	'build-essential':
		ensure  => present,
		require => Exec['apt-get update'];
}
include bootstrap

# Apache
class {
	'apache':
		mpm_module => 'prefork',
		servername => '192.168.33.10',
		require => Exec['apt-get update'];
	'apache::mod::php':
		require => Exec['apt-get update'];
}
apache::vhost { 
	'192.168.33.10':
		port    => '80',
		docroot => '/home/vagrant/www',
		directories => [
    {
      path => '/home/vagrant/www',
      allow_override => [ 'All' ],
      order => 'Allow,Deny',
    }
  ]
}
apache::mod { 'rewrite': }

# PHP
class {
	'php':
		service => 'apache',
		require => Exec['apt-get update'];
}

# Mysql
class {
	'mysql':
		require => Exec['apt-get update'];
	'mysql::php':
		require => Exec['apt-get update'];
	'mysql::server':
		config_hash => { 'root_password' => 'yeopress' },
		require => Exec['apt-get update'];
}
mysql::db {
	'garden':
		user     => 'garden',
		password => 'garden',
		host     => 'localhost',
		grant    => ['all'],
		sql      => '../../db184003_Garden.sql',
}

# Git
include git

# Node
include nodejs
