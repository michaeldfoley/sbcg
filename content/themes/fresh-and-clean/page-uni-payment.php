<?php
/*
Template Name: Universal Credit Card Payment Page
*/
?>
<?php get_header(); ?>
	<div id="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
		<div class="post noborder">
			<h1><?php the_title(); ?></h1>		
			<div class="postcontent">
				<?php the_content(); ?>
			<form name="payment" action="/paymentProcess.php" method="post">
            <input type="hidden" name="formType" value="<?php echo $_GET['formType']?>" />
                  <input type="hidden" name="formId" value="<?php echo $_GET['ID']?>" />
                        <input type="hidden" name="amount" value="<?php echo $_GET['amount']?>" />
                <table cellpadding="5" cellspacing="0" border="0">

                	<tr>
                    	<td>First Name</td>
                        <td><input type="text" name="firstName" /></td>
                        <td>Last Name</td>
                        <td><input type="text" name="lastName" /></td>
                    </tr>
                    <tr>
                    	<td>Street Address</td>
                        <td colspan="3"><input type="text" name="street1" /></td>
                    </tr>
                    <tr>
                    	<td>Zip Code</td>
                        <td><input type="text" name="zipCode" /></td>
                    </tr>
                    <tr>
                    	<td>Card #</td>
                        <td colspan="3"><input type="text" name="cardNumber" /></td>
                    </tr>
                    <tr>
                    	<td>Expiration</td>
                        <td><input type="text" name="expiry" /></td>
                    <td>CVV2</td>
                    <td><input type="text" name="cvv2" /></td>
                    </tr>
                    <tr>
                    	<td colspan="4"><input type="submit" name="submit" value="process payment" /></td>
                    </tr>
                </table>
                </form>
			</div><!-- /Postcontent -->
		</div><!-- /Post -->
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>	
	</div><!-- End Main -->			
<?php get_sidebar(); ?>	
<?php get_footer(); ?>