<?
	switch ($wk)
	{
		
		/**********************************************  add  **********************************************/
		
		case "add":
		
			conn();
			$sql = "INSERT INTO xx (`aa`)VALUES(:aa)";
			$res = $conn->prepare($sql);
			$res->bindParam(':aa',$aa,PDO::PARAM_STR,20);
			$res->execute();	
			
			if($res)
			{
				//success					
			}
			cls_conn();	
			
			break;
		
		/**********************************************  modify  **********************************************/
		
		case "mod":
			
			conn();
			$sql = "UPDATE xx SET `aa`=:aa WHERE no='".$no."'";
			$res = $conn->prepare($sql);
			$res->bindParam(':aa',$aa,PDO::PARAM_STR,20);
			$res->execute();
			
			if($res)
			{
				//success					
			}
			cls_conn();	
			
			break;
			
		/**********************************************  delete  **********************************************/
		
		case "del":
		
			conn();
			$sql = "DELETE FROM `faq` WHERE `fsn` = '".$fsn."'";
			$res = $conn->exec($sql);				
			cls_conn();	
			
			break;
	}
	
	/**********************************************  read  **********************************************/
	function member($sn)
	{
		global $conn;
		
		if($sn)
		{
			$sql = "SELECT aa FROM member where msn='".$sn."' limit 1";
			conn();
			$res = $conn->query($sql);									
			if($res)
			{
				list($aa)=$res->fetch();
				return $aa;
			}
			cls_conn();
		}
		else
		{
			global $list,$count;
			conn();		
			$sql = "SELECT * FROM member";					
			$res = $conn->query($sql);	
			$list = $res->fetchAll();
			$count = count($list);
			cls_conn();
		}
	}	
?>