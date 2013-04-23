<?php
//Written by Josh Giblett
class MessageTube extends CApplicationComponent
{
	//This class is an extension of CApplicationComponent command
	//The class will be responsible for adding jobs to the beanstalkd queue
	static function pushToTube($params=null)
	{
		$completed = false;
		if (isset($params))
		{
			//if params are provided then proceed
			try
			{
          		//Get a beanstalkd queue instance
          		$queue = Yii::app()->yiinstalk->getClient();
          		if($queue)
          		{
     				//If the queue instance was created add the job to the queue
     				$jobId = $queue->putInTube('messageTube',json_encode($params));
     				if($jobId != false)
     				{
		 	    		//If an id is returned from the queue then the job has been successfully added
		 	    		$completed = true;
		 	    	}
		 	    }
		 	 }
		 	 catch(CException $e)
		 	 {
		 	 	//TODO process the error
		 	 }
		}
		//Return the outcome of adding the job to the queue
		return $completed;
	}
}
?>