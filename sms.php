<?php
/*
 *
 *
 *
 *       Author: 	Harvey Cary
 *			hdcary@att.com
 *
 *       Project: SMS
 *
 *       Platform: PHP5
 *
 *       Purpose: 
 *
 *       Requirements:
 *
 *
 *       Assumptions:
 *
 *       Invocation:
 *
 *       $Log$
 *
 */
 
class sms {
    
    private $headers;
    private $sender;
    private $recipient;
    private $body;
    
    public function __construct()
    {

	$this->setList();
	
    }

    public function send_msg()
    {
  
	if( is_null($this->sender) || is_null($this->to) || is_null($this->subject) )
	{
	    echo "Error: Sender, receiver and subject must be set before calling send_msg<br>";
	    return(1);
	
	}


         if( mail($this->to,$this->subject,$this->body,$this->headers) ) {
	    echo "Mail sent to $this->to";
	} else {
	    echo "Error mail not sent<br>";
	}
    
    }

    public function set_sender( $sender )
    {
	
	$this->headers = 'From: $sender' . "\r\n" .
	    'Reply-To: $sender' . "\r\n";

    }

    public function set_recipient( $number, $fqdn )
    {
	
	$this->to = $number . "\@" . $fqdn;
    
    }
    
    public function set_subject( $subject )
    {
	
	$this->subject = $subject;
    
    }

    public function set_body( $body )
    {
	
	$this->$body = $body;
    
    }
    
    private function setList()
    {
    
	$provider['txt.att.net'] = "ATT";
	$provider['sms.3rivers.net'] = "3 River Wireless";
	$provider['paging.acswireless.com'] = "ACS Wireless";
	$provider['message.alltel.com'] = "Alltel";
	$provider['txt.att.net'] = "AT&T";
	$provider['txt.bellmobility.ca'] = "Bell Canada";
	$provider['bellmobility.ca'] = "Bell Canada";
	$provider['txt.bell.ca'] = "Bell Mobility (Canada)";
	$provider['txt.bellmobility.ca'] = "Bell Mobility";
	$provider['blueskyfrog.com'] = "Blue Sky Frog";
	$provider['sms.bluecell.com'] = "Bluegrass Cellular";
	$provider['myboostmobile.com'] = "Boost Mobile";
	$provider['bplmobile.com'] = "BPL Mobile";
	$provider['cwwsms.com'] = "Carolina West Wireless";
	$provider['mobile.celloneusa.com'] = "Cellular One";
	$provider['csouth1.com'] = "Cellular South";
	$provider['cwemail.com'] = "Centennial Wireless";
	$provider['messaging.centurytel.net'] = "CenturyTel";
	$provider['txt.att.net'] = "Cingular (Now AT&T)";
	$provider['msg.clearnet.com'] = "Clearnet";
	$provider['comcastpcs.textmsg.com'] = "Comcast";
	$provider['corrwireless.net'] = "Corr Wireless Communications";
	$provider['mobile.dobson.net'] = "Dobson";
	$provider['sms.edgewireless.com'] = "Edge Wireless";
	$provider['fido.ca'] = "Fido";
	$provider['sms.goldentele.com'] = "Golden Telecom";
	$provider['messaging.sprintpcs.com'] = "Helio";
	$provider['text.houstoncellular.net'] = "Houston Cellular";
	$provider['ideacellular.net'] = "Idea Cellular";
	$provider['ivctext.com'] = "Illinois Valley Cellular";
	$provider['inlandlink.com'] = "Inland Cellular Telephone";
	$provider['pagemci.com'] = "MCI";
	$provider['page.metrocall.com'] = "Metrocall";
	$provider['my2way.com'] = "Metrocall 2-way";
	$provider['mymetropcs.com'] = "Metro PCS";
	$provider['fido.ca'] = "Microcell";
	$provider['clearlydigital.com'] = "Midwest Wireless";
	$provider['mobilecomm.net'] = "Mobilcomm";
	$provider['text.mtsmobility.com'] = "MTS";
	$provider['messaging.nextel.com'] = "Nextel";
	$provider['onlinebeep.net'] = "OnlineBeep";
	$provider['pcsone.net'] = "PCS One";
	$provider['txt.bell.ca'] = "President's Choice";
	$provider['sms.pscel.com'] = "Public Service Cellular";
	$provider['qwestmp.com'] = "Qwest";
	$provider['pcs.rogers.com'] = "Rogers AT&T Wireless";
	$provider['pcs.rogers.com'] = "Rogers Canada";
	$provider['satellink.net'] = "Satellink";
	$provider['email.swbw.com'] = "Southwestern Bell";
	$provider['messaging.sprintpcs.com'] = "Sprint";
	$provider['tms.suncom.com'] = "Sumcom";
	$provider['mobile.surewest.com'] = "Surewest Communicaitons";
	$provider['tmomail.net'] = "T-Mobile";
	$provider['msg.telus.com'] = "Telus";
	$provider['txt.att.net'] = "Tracfone";
	$provider['tms.suncom.com'] = "Triton";
	$provider['utext.com'] = "Unicel";
	$provider['email.uscc.net'] = "US Cellular";
	$provider['txt.bell.ca'] = "Solo Mobile";
	$provider['messaging.sprintpcs.com'] = "Sprint";
	$provider['tms.suncom.com'] = "Sumcom";
	$provider['mobile.surewest.com'] = "Surewest Communicaitons";
	$provider['tmomail.net'] = "T-Mobile";
	$provider['msg.telus.com'] = "Telus";
	$provider['tms.suncom.com'] = "Triton";
	$provider['utext.com'] = "Unicel";
	$provider['email.uscc.net'] = "US Cellular";
	$provider['uswestdatamail.com'] = "US West";
	$provider['vtext.com'] = "Verizon";
	$provider['vmobl.com'] = "Virgin Mobile";
	$provider['vmobile.ca'] = "Virgin Mobile Canada";
	$provider['sms.wcc.net'] = "West Central Wireless";
	$provider['cellularonewest.com'] = "Western Wireless";

    }   


  
}