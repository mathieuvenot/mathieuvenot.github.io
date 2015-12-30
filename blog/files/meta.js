(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"archive-sep-2011.html":"Archives for Sep 2011","3fd12467315d21973cb149f8af6bfed0-20.html":"\n\/\/ OSAKA UMEKITA DEVELOPMENT AREA (EZCT Architecture & Design Research | With Oswald PFEIFFER, Sebastian\rANDRAOS, Xavier DELANOUE, Simon ERARD)\n\n￼\n\n￼","archive-may-2015.html":"Archives for May 2015","tag-academic-project.html":"Posts tagged &ldquo;Academic Project&rdquo;","tag-year4.html":"Posts tagged &ldquo;YEAR4&rdquo;","tag-consulting.html":"Posts tagged &ldquo;Consulting&rdquo;","2181096fc48c63774d16cf73ef06edeb-24.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","f1101557af4027b4a9e586659e5c85e0-2.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-jan-2012.html":"Archives for Jan 2012","category-essay-002f-ensapm.html":"A list of posts in category &ldquo;Essay \/ ENSAPM&rdquo;","archive-jan-2013.html":"Archives for Jan 2013","3076e82a49f5b17e853431f1231e32f1-22.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","category-projects-002f-ensapm.html":"A list of posts in category &ldquo;Projects \/ ENSAPM&rdquo;","tag-year3.html":"Posts tagged &ldquo;YEAR3&rdquo;","archive-jan-2014.html":"Archives for Jan 2014","6af8e00b7f8984b4c06fd507ee09d306-13.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","category-other-work-002f-ensapm.html":"A list of posts in category &ldquo;Other Work \/ ENSAPM&rdquo;","6bbd7efa3aef2c3c88d40c83258ac4fa-3.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-sep-2015.html":"Archives for Sep 2015","063f28d037c81143c26e5707077e9917-9.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","1103249208c57e88e08dc7fab79cfc9e-26.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-jan-2015.html":"Archives for Jan 2015","category-personnal-work.html":"A list of posts in category &ldquo;Personnal Work&rdquo;","f98dc0149e61064bdae31372e4e836f2-16.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","863c318e442ca9d2c48e925f1ac09769-8.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","category-internships.html":"A list of posts in category &ldquo;Internships&rdquo;","tag-teaching.html":"Posts tagged &ldquo;Teaching&rdquo;","tag-year2.html":"Posts tagged &ldquo;YEAR2&rdquo;","archive-oct-2012.html":"Archives for Oct 2012","cb6134dbdb317ed61c0d5ef8a876a218-5.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","6956d5de649cfec572b87db731d9c61f-11.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","7908d4ebf558c2d6ced8646f55f08f24-7.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-nov-2011.html":"Archives for Nov 2011","archive-oct-2013.html":"Archives for Oct 2013","archive-feb-2013.html":"Archives for Feb 2013","archive-dec-2013.html":"Archives for Dec 2013","tag-year1.html":"Posts tagged &ldquo;YEAR1&rdquo;","archive-jun-2012.html":"Archives for Jun 2012","8df777ce880d393784b03b7fb4ea323a-25.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-feb-2014.html":"Archives for Feb 2014","550ad4bb89e40ea2dd1aa2e4a3f144fe-4.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-jun-2013.html":"Archives for Jun 2013","archive-oct-2015.html":"Archives for Oct 2015","archive-feb-2015.html":"Archives for Feb 2015","category-consulting.html":"A list of posts in category &ldquo;Consulting&rdquo;","3f878d2cb7d72e81dcfabd66de88b4db-23.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-dec-2015.html":"Archives for Dec 2015","archive-may-2011.html":"Archives for May 2011","archive-jun-2014.html":"Archives for Jun 2014","e0c7c9c2bfc25f6b0aca223e6592ae1a-19.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","8f888cfcecc9b9e600c4c514eb31b4c9-6.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","7fdc4e29b3e2324374490e053f8b9d9e-1.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","archive-jun-2015.html":"Archives for Jun 2015","a319bbe46560e43213ffc5b933c8ff4b-0.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","category-teaching-002f-ensapm.html":"A list of posts in category &ldquo;Teaching \/ ENSAPM&rdquo;","1b3a772889a82020e3ba6bd483a46dfc-10.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","8bb1ad907b97112f7eb6ec3d83318378-15.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","5a69be8fa38e47a586cd54c813114331-18.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","2296bf6abde320e2f1d5221da7ce23b0-21.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","45a40e9d3b63a4b50d44ec6cf0cf18d6-17.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","5135a7262c425cff99932d259f38f079-12.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","9bc6d3900af48b34a6e805d31472380f-14.html":"<div class=\"scaleblogsum\">\n￼\n<\/div>","category-internship-002f-ensapm.html":"A list of posts in category &ldquo;Internship \/ ENSAPM&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();