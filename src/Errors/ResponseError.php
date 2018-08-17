<?php

namespace Bhavinjr\Ekomi\Errors;

class ResponseError
{	
	//Ekomi always provide 200 status code.
	//success response data is either string message, string error ot array
	//we have to identify the errors usingn this class
	
    public static function getErrors()
    {
    	return [
    		// common
    		'NonAuth' 		=> 'Missing authorization parameters',
    		'NonFunction' 	=> 'Invalid function name',
    		'NonVersion' 	=> 'Missing version parameters',
    		'Access denied' => 'Invalid authorization value',
    		
    		// putOrder
    		'Invalid date' 	=> 'Given ordertimestamp date is invalid',
    		'Something in your request was wrong.'	=> 'Something in your request was wrong.',

    		// putComment
    		'Order-ID not found.' 	=> 'Order id doesn’t exist.',
    		'Empty comment parameter.' 	=> 'Comment can only be left out if update=delete',

    		'Comment already exists. Please use the update parameter to overwrite or delete.' => 
    		'To prevent accidental overwriting, you need to explicitly state if you want to replace or delete an existing comment.',

    		'Invalid content for update parameter.' => 'update parameter may only contain [replace] or [delete].',

    		// putDialog
    		'OrderID empty.' 			 => 'Order id is mandatory.',
    		'Message parameter is empty' => 'Empty messages are not allowed.',
    		'Customer left no mail address.' => 'Entering a mail address in the review is optional. If the customer chooses not to leave a mail address, he can’t be contacted through the eKomi dialog.',
    		'Dialog closed by customer.' => 'Shop can continue dialog only when open or when closed by shop.',
    		'Dialog closed by eKomi.' 	 => 'Shop can continue dialog only when open or when closed by shop.',

    		// assignClientOrder
    		'Order-ID not found.' 	=> 'No match found for the order_id given.',
    		'Client id not known' 	=> 'Given client ID not matched in existing client list.',
    		'Order [id] already assigned to [client_id]' 	=> 'Given order ID is already linked to a different client ID.',

    		// getFeedback
    		'ERROR: Interface ID or password not transmitted' => 'ERROR: Interface ID or password not transmitted',
    		'ERROR: Interface ID or password is not valid.'   => 'ERROR: Interface ID or password is not valid.',
    		'ERROR: Filter is not valid. Possible options: ([all]), [positive] and [critical].' => 'ERROR: Filter is not valid. Possible options: ([all]), [positive] and [critical].',
    		'ERROR: Invalid content in parameter fields.' => 'ERROR: Invalid content in parameter fields.',
    		'ERROR: Type is not valid. Possible options: ([csv], [json]).' => 'ERROR: Type is not valid. Possible options: ([csv], [json]).',
    		'ERROR: Charset is not valid. Possible options: [iso] and ([utf-8]).' => 'ERROR: Charset is not valid. Possible options: [iso] and ([utf-8]).',
    		'ERROR: Caching is not valid. Possible options: [none], [short], [middle], [long] and ([verylong]).' => 'ERROR: Caching is not valid. Possible options: [none], [short], [middle], [long] and ([verylong]).',
    		'ERROR: state is not valid. Possible options: [published].' => 'ERROR: state is not valid. Possible options: [published].',

    		// getResearch
    		'ERROR: Content is not valid. Possible options: ([results]), [questions], [answers], [campaigns] and [campaign_questions].' => 'ERROR: Content is not valid. Possible options: ([results]), [questions], [answers], [campaigns] and [campaign_questions].',

    		// getProductfeedback
    		'ERROR: Type is not valid. Possible options: [csv], [json], [serialized].' => 'ERROR: Type is not valid. Possible options: [csv], [json], [serialized].',

    		// getProductresearch
    		'ERROR: Type is not valid. Possible options: [csv], [json].' => 'ERROR: Type is not valid. Possible options: [csv], [json].',
    		'ERROR: Content is not valid. Possible options: ([results]), [questions], [answers].' => 'ERROR: Content is not valid. Possible options: ([results]), [questions], [answers].',

    		// getProduct
    		'Product parameter is empty.' 	=> 'Product parameter must contain a value',
    		'Product ID not found.' 		=> 'Product ID not found.',
    	];
    }

}