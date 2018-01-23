<?php
$pageName = "Test";																			// Set the page name
require_once './controllers/includeFiles.php';
if ( isset( $_GET['transaction_id'] ) )
{
    // Add the transactions extra data to the database
$tKey = $_GET['t'];
//var_dump($_GET);
    if($_GET['code'] == 000 )																					    // Check the response of the transaction
    {
        // Add the responseCode to the transaction extra data
        $transactions -> updateTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $_GET ) ), $tKey );

        $transactions -> updateStatus( $tKey, 1 );															    // Transaction is successfull, update the status
        sendTransactionMail($tKey);																		    // Send the receipt to user by email
        echo '<script type="text/javascript" language="javascript">
                        window.top.location.href="http://45.56.99.27/receipt?t='.$tKey.'";
                       </script>';																	// Redirect the user to the success receipt page
    }


    else
    {
        // Add the responseCode to the transaction extra data
        $transactions -> updateTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $_GET ) ), $tKey );
//        redirect( '../response?t='.$tKey );																	// Redirect the user to the response page
                        echo '<script type="text/javascript" language="javascript">
                        window.top.location.href="http://45.56.99.27/response?t='.$tKey.'";
                       </script>';
    }

}
?>