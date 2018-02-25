<?php
	
	require_once("AppChains.php");

	function printReport($chainsResult)
    {
        if ($chainsResult->isSucceeded())
            echo "Request has succeeded\n";
        else
            echo "Request has failed\n";

        foreach ($chainsResult->getResults() as $r) {
            $type = $r->getValue()->getType();

            switch ($type) {
                case ResultType::TEXT:
                    $v = $r->getValue();
                    echo sprintf("-> text result type %s = %s\n", $r->getName(), $v->getData());
                    break;
                case ResultType::FILE:
                    $v = $r->getValue();
                    echo sprintf(" -> file result type %s = %s\n", $r->getName(), $v->getUrl());
                    $v->saveTo("/tmp");
                    break;
            }
        }
    }

    $chains = new AppChains($_GET['token'], "api.sequencing.com");
	
	echo "Beacons\n";
	/*$beaconResult = $chains->getPublicBeacon(1, 2, "A");
	print $beaconResult;*/

	echo "Chains\n\n";
	$chainsRawResult = $chains->getRawReport("StartApp", "Chain9", "227682");
	print_r($chainsRawResult);
		
	$chainsResult = $chains->getReport("StartApp", "Chain90", "227682");

    /**
     * @param $chainsResult
     */
    printReport($chainsResult);
    // echo "Study PHP at " . $_GET['chainid'] . "<br>";
    // echo "Study PHP at " . $_GET['fileid'] . "<br>";

    $chainsBatchResult = $chains->getBatchReport("StartAppBatch", array($_GET['chainid'] => $_GET['fileid']));

    foreach ($chainsBatchResult as $key => $value){
        echo "-> Chain ID:";
        echo $key;
        echo "\n";
        printReport($value);
    }


	
?>