  	  // १ २ ३ ४ ५ ६ ७ ८ ९ ० 


    	var arrLang = {
  			'en' : {
  				  "home": "Home",
  				  "about" : "About",
		        "committee" : "Committee",
            "pCommittee" : "Partial Committee",
            "uCommittee" : "Under Committee",
		        "news" : "News",
		        "boardmember" : "Boardmember",
		        "gallery": "Gallery",
		        "contact": "Contact",

            "news-title": "News",
            "regulation" : "Legislation/Regulation",
            "viewBtn" : "View",

            "team": "Our Team",

            "location": "Our Location",

            "conatct-details": "Contact Details",
            "place": "Kathmandu, Nepal",
            "telephone": "Telephone: +977-01-4445789",
            "fax": "Fax:  +977-01-4412426",
            "pbo": "P.B.No.: +977-01-23264",
      
  			},
  			'np' : {
  				  "home": "घर",
		        "about" : "हाम्रोबारे",
		        "committee" : "समिति",
            "pCommittee" : "बिभागिय  समिति",
            "uCommittee" : "मातहत  समिति",
		        "news" : "समाचार",
		        "boardmember" : "कार्यसमिति",
		        "gallery": "गैलरी",
		        "contact": "सम्पर्क",

            "news-title": "समाचार",
            "regulation": "बिधान/नियमाबली",
            "viewBtn": "हेर्नुहोस्",

            "team": "कार्यसमिति",

            "location": "हाम्रो स्थान",

            "conatct-details": "सम्पर्क",
            "place": "काठमाडौं, नेपाल",
            "telephone": "टेलिफोन: +९७७-०१-४४४५७८९",
            "fax": "फैक्स:  +९७७-०१-४४१२४२६",
            "pbo": "P.B.No.: +९७७-०१-२३२६४",
  			}
  		}

  		$(function(){
  			$('.translate').click(function(){
  				var lang = $(this).attr('id');
  				$('.lang').each(function(index, element){
  					$(this).text(arrLang[lang][$(this).attr('key')]);
  				})
  			});
  		});