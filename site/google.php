<?php

require __DIR__ . '/vendor/autoload.php';
session_start();

$client = new Google_Client();
$client->setClientId('1035150987210-iqiga1sabfhiob009tjsutqu1uha53fc.apps.googleusercontent.com');
$client->setClientSecret('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');
$service = new Google_Service_Calendar($client);
// $apiKey = "AIzaSyAc6I_2kwKHfRhpdUKH1g0rotjIdsFAGwM";
              

// $service = getPublicService($apiKey);


/**
 * Authenticating to Google using a Service account
 * Documentation: https://developers.google.com/accounts/docs/OAuth2#serviceaccount
 * Initializes an Calendar.v3 service object.
 * @param string API key
 * @return An authorized Calendar.v3 service object.
 */
function getPublicService($apiKey) {
	try {
		
		$client = new Google_Client();
		$client->setApplicationName("Google Calendar Sample");
		
		// Warn if the API key isn't set.
		if ($apiKey = "") {
			echo "Missing API key";
			return;
		}
		
		// Apply key to client.
		$client->setDeveloperKey($apiKey);
		// Create authenticated Calendar service
		return new Google_Service_Calendar($client);
	} catch (Exception $e) {
		print "An error occurred: " . $e->getMessage();
	}
}


$optParams = array(
            
    //'maxResults' => '[YourValue]',  // Maximum number of entries returned on one result page. By default the value is 100 entries. The page size can never be larger than 250 entries. Optional.
              
    //'minAccessRole' => '[YourValue]',  // The minimum access role for the user in the returned entries. Optional. The default is no restriction.
              
    //'pageToken' => '[YourValue]',  // Token specifying which result page to return. Optional.
              
    //'showDeleted' => '[YourValue]',  // Whether to include deleted calendar list entries in the result. Optional. The default is False.
              
    //'showHidden' => '[YourValue]',  // Whether to show hidden entries. Optional. The default is False.
              
    //'syncToken' => '[YourValue]',  // Token obtained from the nextSyncToken field returned on the last page of results from the previous list request. It makes the result of this list request contain only entries that have changed since then. If only read-only fields such as calendar properties or ACLs have changed, the entry won't be returned. All entries deleted and hidden since the previous list request will always be in the result set and it is not allowed to set showDeleted neither showHidden to False.To ensure client state consistency minAccessRole query parameter cannot be specified together with nextSyncToken.If the syncToken expires, the server will respond with a 410 GONE response code and the client should clear its storage and perform a full synchronization without any syncToken.Learn more about incremental synchronization.Optional. The default is to return all entries.
    'fields' => '*'
  );
  // Single Request.
  $results = calendarListListExample($service, $optParams);
  ?> <pre> <?php var_dump ($results); ?> </pre> <?php	
  
  // Paginiation Example

  
  /**
  * Returns entries on the user's calendar list.
  * @service Authenticated Calendar service.
  * @optParams Optional paramaters are not required by a request.
  * @return CalendarList
  */
  function calendarListListExample($service, $optParams)
  {
      try
      {
          // Parameter validation.
          if ($service == null)
              throw new Exception("service is required.");
          if ($optParams == null)
              throw new Exception("optParams is required.");
          // Make the request and return the results.
          return $service->calendarList->ListCalendarList($optParams);
      }
      catch (Exception $e)
      {
          print "An error occurred: " . $e->getMessage();
      }
  }