<?php

/**
 *
 * ZPanel - Links Manager Module, by Baldman: www.zpanelcp.com.
 *
 */
 
class module_controller {

    static function getDescription() {
			return ui_module::GetModuleDescription();
    }

	static function getModuleName() {
		$module_name = ui_module::GetModuleName();
        return $module_name;
    }

	static function getModuleIcon() {
		global $controller;
		$module_icon = "/modules/" . $controller->GetControllerRequest('URL', 'module') . "/assets/icon.png";
        return $module_icon;
    }
	static function getArrowUp() {
		global $controller;
		$arrow_up = "/modules/" . $controller->GetControllerRequest('URL', 'module') . "/assets/au.png";
        return $arrow_up;
    }
	static function getArrowDn() {
		global $controller;
		$arrow_dn = "/modules/" . $controller->GetControllerRequest('URL', 'module') . "/assets/ad.png";
        return $arrow_dn;
    }	
	
    static function getLink1Icon() {
        global $controller;
		$file = "./modules/links_data/link1/icon.txt";
        $Link1Icon = fs_filehandler::ReadFileContents($file); 
        return $Link1Icon;
    }
    static function getLink1Name() {
        global $controller;
        $file = "./modules/links_data/link1/name.txt";
        $Link1Name = fs_filehandler::ReadFileContents($file); 
        return $Link1Name;
    }
    static function getLink1Description() {
        global $controller;
        $file = "./modules/links_data/link1/desc.txt";
        $Link1Description = fs_filehandler::ReadFileContents($file); 
        return $Link1Description;
    }
    static function getLink1Url() {
        global $controller;
        $file = "./modules/links_data/link1/url.txt";
        $Link1Url = fs_filehandler::ReadFileContents($file); 
        return $Link1Url;
    }
    static function getLink1Disp() {
        global $controller;
        $file = "./modules/links_data/link1/disp.txt";
        $Link1Disp = fs_filehandler::ReadFileContents($file); 
        return $Link1Disp;
    }
    static function getLink2Icon() {
        global $controller;
        $file = "./modules/links_data/link2/icon.txt";
        $Link2Icon = fs_filehandler::ReadFileContents($file); 
        return $Link2Icon;
    }
    static function getLink2Name() {
        global $controller;
        $file = "./modules/links_data/link2/name.txt";
        $Link2Name = fs_filehandler::ReadFileContents($file); 
        return $Link2Name;
    }
    static function getLink2Description() {
        global $controller;
        $file = "./modules/links_data/link2/desc.txt";
        $Link2Description = fs_filehandler::ReadFileContents($file); 
        return $Link2Description;
    }
    static function getLink2Url() {
        global $controller;
        $file = "./modules/links_data/link2/url.txt";
        $Link2Url = fs_filehandler::ReadFileContents($file); 
        return $Link2Url;
    }
    static function getLink2Disp() {
        global $controller;
        $file = "./modules/links_data/link2/disp.txt";
        $Link2Disp = fs_filehandler::ReadFileContents($file); 
        return $Link2Disp;
    }
    static function getLink3Icon() {
        global $controller;
        $file = "./modules/links_data/link3/icon.txt";
        $Link3Icon = fs_filehandler::ReadFileContents($file); 
        return $Link3Icon;
    }
    static function getLink3Name() {
        global $controller;
        $file = "./modules/links_data/link3/name.txt";
        $Link3Name = fs_filehandler::ReadFileContents($file); 
        return $Link3Name;
    }
    static function getLink3Description() {
        global $controller;
        $file = "./modules/links_data/link3/desc.txt";
        $Link3Description = fs_filehandler::ReadFileContents($file); 
        return $Link3Description;
    }
    static function getLink3Url() {
        global $controller;
        $file = "./modules/links_data/link3/url.txt";
        $Link3Url = fs_filehandler::ReadFileContents($file); 
        return $Link3Url;
    }
    static function getLink3Disp() {
        global $controller;
        $file = "./modules/links_data/link3/disp.txt";
        $Link3Disp = fs_filehandler::ReadFileContents($file); 
        return $Link3Disp;
    }		
    static function getLink4Icon() {
        global $controller;
        $file = "./modules/links_data/link4/icon.txt";
        $Link4Icon = fs_filehandler::ReadFileContents($file); 
        return $Link4Icon;
    }
    static function getLink4Name() {
        global $controller;
        $file = "./modules/links_data/link4/name.txt";
        $Link4Name = fs_filehandler::ReadFileContents($file); 
        return $Link4Name;
    }
    static function getLink4Description() {
        global $controller;
        $file = "./modules/links_data/link4/desc.txt";
        $Link4Description = fs_filehandler::ReadFileContents($file); 
        return $Link4Description;
    }
    static function getLink4Url() {
        global $controller;
        $file = "./modules/links_data/link4/url.txt";
        $Link4Url = fs_filehandler::ReadFileContents($file); 
        return $Link4Url;
    }
    static function getLink4Disp() {
        global $controller;
        $file = "./modules/links_data/link4/disp.txt";
        $Link4Disp = fs_filehandler::ReadFileContents($file); 
        return $Link4Disp;
    }
    static function getLink5Icon() {
        global $controller;
        $file = "./modules/links_data/link5/icon.txt";
        $Link5Icon = fs_filehandler::ReadFileContents($file); 
        return $Link5Icon;
    }
    static function getLink5Name() {
        global $controller;
        $file = "./modules/links_data/link5/name.txt";
        $Link5Name = fs_filehandler::ReadFileContents($file); 
        return $Link5Name;
    }
    static function getLink5Description() {
        global $controller;
        $file = "./modules/links_data/link5/desc.txt";
        $Link5Description = fs_filehandler::ReadFileContents($file); 
        return $Link5Description;
    }
    static function getLink5Url() {
        global $controller;
        $file = "./modules/links_data/link5/url.txt";
        $Link5Url = fs_filehandler::ReadFileContents($file); 
        return $Link5Url;
    }
    static function getLink5Disp() {
        global $controller;
        $file = "./modules/links_data/link5/disp.txt";
        $Link5Disp = fs_filehandler::ReadFileContents($file); 
        return $Link5Disp;
    }		
    static function getLink6Icon() {
        global $controller;
		$file = "./modules/links_data/link6/icon.txt";
        $Link6Icon = fs_filehandler::ReadFileContents($file); 
        return $Link6Icon;
    }
    static function getLink6Name() {
        global $controller;
        $file = "./modules/links_data/link6/name.txt";
        $Link6Name = fs_filehandler::ReadFileContents($file); 
        return $Link6Name;
    }
    static function getLink6Description() {
        global $controller;
        $file = "./modules/links_data/link6/desc.txt";
        $Link6Description = fs_filehandler::ReadFileContents($file); 
        return $Link6Description;
    }
    static function getLink6Url() {
        global $controller;
        $file = "./modules/links_data/link6/url.txt";
        $Link6Url = fs_filehandler::ReadFileContents($file); 
        return $Link6Url;
    }
    static function getLink6Disp() {
        global $controller;
        $file = "./modules/links_data/link6/disp.txt";
        $Link6Disp = fs_filehandler::ReadFileContents($file); 
        return $Link6Disp;
    }
    static function getLink7Icon() {
        global $controller;
        $file = "./modules/links_data/link7/icon.txt";
        $Link7Icon = fs_filehandler::ReadFileContents($file); 
        return $Link7Icon;
    }
    static function getLink7Name() {
        global $controller;
        $file = "./modules/links_data/link7/name.txt";
        $Link7Name = fs_filehandler::ReadFileContents($file); 
        return $Link7Name;
    }
    static function getLink7Description() {
        global $controller;
        $file = "./modules/links_data/link7/desc.txt";
        $Link7Description = fs_filehandler::ReadFileContents($file); 
        return $Link7Description;
    }
    static function getLink7Url() {
        global $controller;
        $file = "./modules/links_data/link7/url.txt";
        $Link7Url = fs_filehandler::ReadFileContents($file); 
        return $Link7Url;
    }
    static function getLink7Disp() {
        global $controller;
        $file = "./modules/links_data/link7/disp.txt";
        $Link7Disp = fs_filehandler::ReadFileContents($file); 
        return $Link7Disp;
    }
    static function getLink8Icon() {
        global $controller;
        $file = "./modules/links_data/link8/icon.txt";
        $Link8Icon = fs_filehandler::ReadFileContents($file); 
        return $Link8Icon;
    }
    static function getLink8Name() {
        global $controller;
        $file = "./modules/links_data/link8/name.txt";
        $Link8Name = fs_filehandler::ReadFileContents($file); 
        return $Link8Name;
    }
    static function getLink8Description() {
        global $controller;
        $file = "./modules/links_data/link8/desc.txt";
        $Link8Description = fs_filehandler::ReadFileContents($file); 
        return $Link8Description;
    }
    static function getLink8Url() {
        global $controller;
        $file = "./modules/links_data/link8/url.txt";
        $Link8Url = fs_filehandler::ReadFileContents($file); 
        return $Link8Url;
    }
    static function getLink8Disp() {
        global $controller;
        $file = "./modules/links_data/link8/disp.txt";
        $Link8Disp = fs_filehandler::ReadFileContents($file); 
        return $Link8Disp;
    }		
    static function getLink9Icon() {
        global $controller;
        $file = "./modules/links_data/link9/icon.txt";
        $Link9Icon = fs_filehandler::ReadFileContents($file); 
        return $Link9Icon;
    }
    static function getLink9Name() {
        global $controller;
        $file = "./modules/links_data/link9/name.txt";
        $Link9Name = fs_filehandler::ReadFileContents($file); 
        return $Link9Name;
    }
    static function getLink9Description() {
        global $controller;
        $file = "./modules/links_data/link9/desc.txt";
        $Link9Description = fs_filehandler::ReadFileContents($file); 
        return $Link9Description;
    }
    static function getLink9Url() {
        global $controller;
        $file = "./modules/links_data/link9/url.txt";
        $Link9Url = fs_filehandler::ReadFileContents($file); 
        return $Link9Url;
    }
    static function getLink9Disp() {
        global $controller;
        $file = "./modules/links_data/link9/disp.txt";
        $Link9Disp = fs_filehandler::ReadFileContents($file); 
        return $Link9Disp;
    }
    static function getLink10Icon() {
        global $controller;
        $file = "./modules/links_data/link10/icon.txt";
        $Link10Icon = fs_filehandler::ReadFileContents($file); 
        return $Link10Icon;
    }
    static function getLink10Name() {
        global $controller;
        $file = "./modules/links_data/link10/name.txt";
        $Link10Name = fs_filehandler::ReadFileContents($file); 
        return $Link10Name;
    }
    static function getLink10Description() {
        global $controller;
        $file = "./modules/links_data/link10/desc.txt";
        $Link10Description = fs_filehandler::ReadFileContents($file); 
        return $Link10Description;
    }
    static function getLink10Url() {
        global $controller;
        $file = "./modules/links_data/link10/url.txt";
        $Link10Url = fs_filehandler::ReadFileContents($file); 
        return $Link10Url;
    }
    static function getLink10Disp() {
        global $controller;
        $file = "./modules/links_data/link10/disp.txt";
        $Link10Disp = fs_filehandler::ReadFileContents($file); 
        return $Link10Disp;
    }		
    static $statusDataWrite;
    static $functionRan;
    static $messageType;

    static function doLink1Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink1Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink1Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link1/icon.txt";
	    $file2 = "./modules/links_data/link1/name.txt";
	    $file3 = "./modules/links_data/link1/desc.txt";
	    $file4 = "./modules/links_data/link1/url.txt";
	    $file5 = "./modules/links_data/link1/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink2Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink2Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink2Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link2/icon.txt";
	    $file2 = "./modules/links_data/link2/name.txt";
	    $file3 = "./modules/links_data/link2/desc.txt";
	    $file4 = "./modules/links_data/link2/url.txt";
	    $file5 = "./modules/links_data/link2/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink3Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink3Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink3Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link3/icon.txt";
	    $file2 = "./modules/links_data/link3/name.txt";
	    $file3 = "./modules/links_data/link3/desc.txt";
	    $file4 = "./modules/links_data/link3/url.txt";
	    $file5 = "./modules/links_data/link3/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }		
     static function doLink4Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink4Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink4Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link4/icon.txt";
	    $file2 = "./modules/links_data/link4/name.txt";
	    $file3 = "./modules/links_data/link4/desc.txt";
	    $file4 = "./modules/links_data/link4/url.txt";
	    $file5 = "./modules/links_data/link4/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink5Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink5Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink5Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link5/icon.txt";
	    $file2 = "./modules/links_data/link5/name.txt";
	    $file3 = "./modules/links_data/link5/desc.txt";
	    $file4 = "./modules/links_data/link5/url.txt";
	    $file5 = "./modules/links_data/link5/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink6Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink6Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink6Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link6/icon.txt";
	    $file2 = "./modules/links_data/link6/name.txt";
	    $file3 = "./modules/links_data/link6/desc.txt";
	    $file4 = "./modules/links_data/link6/url.txt";
	    $file5 = "./modules/links_data/link6/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink7Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink7Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink7Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link7/icon.txt";
	    $file2 = "./modules/links_data/link7/name.txt";
	    $file3 = "./modules/links_data/link7/desc.txt";
	    $file4 = "./modules/links_data/link7/url.txt";
	    $file5 = "./modules/links_data/link7/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink8Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink8Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink8Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link8/icon.txt";
	    $file2 = "./modules/links_data/link8/name.txt";
	    $file3 = "./modules/links_data/link8/desc.txt";
	    $file4 = "./modules/links_data/link8/url.txt";
	    $file5 = "./modules/links_data/link8/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }		
     static function doLink9Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink9Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink9Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link9/icon.txt";
	    $file2 = "./modules/links_data/link9/name.txt";
	    $file3 = "./modules/links_data/link9/desc.txt";
	    $file4 = "./modules/links_data/link9/url.txt";
	    $file5 = "./modules/links_data/link9/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }
    static function doLink10Post() {
        global $controller;
        $icon = $controller->GetControllerRequest('FORM', 'icon');
	    $name = $controller->GetControllerRequest('FORM', 'name');
	    $des = $controller->GetControllerRequest('FORM', 'description');
	    $url = $controller->GetControllerRequest('FORM', 'url');
	    $disp = $controller->GetControllerRequest('FORM', 'disp');
        if(self::ExcuteLink10Post($icon, $name, $des, $url, $disp)){
        return;
        }else{
        return;
        }
    }
 
    static function ExcuteLink10Post($icon, $name, $des, $url, $disp){
        global $controller;
        $file1 = "./modules/links_data/link10/icon.txt";
	    $file2 = "./modules/links_data/link10/name.txt";
	    $file3 = "./modules/links_data/link10/desc.txt";
	    $file4 = "./modules/links_data/link10/url.txt";
	    $file5 = "./modules/links_data/link10/disp.txt";
	    if(fs_filehandler::UpdateFile($file1,0777,$icon))
	    if(fs_filehandler::UpdateFile($file2,0777,$name))
	    if(fs_filehandler::UpdateFile($file3,0777,$des))
	    if(fs_filehandler::UpdateFile($file4,0777,$url))
	    if(fs_filehandler::UpdateFile($file5,0777,$disp)){
        self::$statusDataWrite = "File updated";
        self::$functionRan= 1;
        self::$messageType= 'zannounceok';
        return true;
        }else{
        self::$statusDataWrite = "Faile d to update file";
        self::$functionRan= 1;
        self::$messageType = 'zannounceerror';
        return false;
        }
    }		
    static function getResult() {
        if(self::$functionRan == 1){
        return ui_sysmessage::shout(ui_language::translate(self:: $statusDataWrite), self::$messageType);
        }
        return;
    }  
 
}
?>