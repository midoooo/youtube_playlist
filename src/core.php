<?php

function youtube_playlist($playlist_id)
{
	# https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU
	#
	# <?xml version="1.0" encoding="UTF-8"? >
	# <feed xmlns="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/" xmlns:openSearch="http://a9.com/-/spec/opensearchrss/1.0/" xmlns:gd="http://schemas.google.com/g/2005" xmlns:yt="http://gdata.youtube.com/schemas/2007">
	# 	<id>http://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU</id>
	# 	<updated>1970-01-01T00:00:00.000Z</updated>
	# 	<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#playlist" />
	# 	<title type="text">Season 1 Episodes</title>
	# 	<subtitle type="text" />
	# 	<logo>http://www.youtube.com/img/pic_youtubelogo_123x63.gif</logo>
	# 	<link rel="alternate" type="text/html" href="https://www.youtube.com/playlist?list=ELjmAb7RB9ylU" />
	# 	<link rel="http://schemas.google.com/g/2005#feed" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU" />
	# 	<link rel="http://schemas.google.com/g/2005#batch" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/batch" />
	# 	<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU?start-index=1&amp;max-results=25" />
	# 	<link rel="next" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU?start-index=26&amp;max-results=25" />
	# 	<author>
	# 		<name>YouTube</name>
	# 		<uri>https://gdata.youtube.com/feeds/api/users/YouTube</uri>
	# 	</author>
	# 	<generator version="2.1" uri="http://gdata.youtube.com">YouTube data API</generator>
	# 	<openSearch:totalResults>31</openSearch:totalResults>
	# 	<openSearch:startIndex>1</openSearch:startIndex>
	# 	<openSearch:itemsPerPage>25</openSearch:itemsPerPage>
	# 	<media:group>
	# 		<media:content url="http://www.youtube.com/p/ELjmAb7RB9ylU" type="application/x-shockwave-flash" yt:format="5" />
	# 		<media:thumbnail url="https://i.ytimg.com/vi/g9ifxh-qrWI/default.jpg" height="90" width="120" yt:name="default" />
	# 		<media:thumbnail url="https://i.ytimg.com/vi/g9ifxh-qrWI/mqdefault.jpg" height="180" width="320" yt:name="mqdefault" />
	# 		<media:thumbnail url="https://i.ytimg.com/vi/g9ifxh-qrWI/hqdefault.jpg" height="360" width="480" yt:name="hqdefault" />
	# 		<media:title type="plain">Season 1 Episodes</media:title>
	# 	</media:group>
	# 	<yt:playlistId>ELjmAb7RB9ylU</yt:playlistId>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraeGChvF-FsYlvBgjf6kkJHY</id>
	# 		<published>2013-04-22T10:27:19.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Первая встреча (1 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Далеко-далеко, в домике возле железной дороги, живет маленькая и очень шустрая девочка Маша. Она так любит играть, что прочие обитатели двора от неё просто прячутся. От скуки непоседа убегает в лес, где находится уютный домик Медведя, который ушел на рыбалку. Вернувшийся медведь находит свое жилье в разрушенном состоянии. Он обнаруживает источник беспорядков в самом домике - это прыгающая на кровати маленькая девочка. Медведь всячески пытается избавиться от незваной гостьи. Но когда ему это удается, он вдруг испытывает тревогу за судьбу оставленной в лесу Маши. Медведь бросается на поиски и находит её в своем доме.</content>
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=g9ifxh-qrWI&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/g9ifxh-qrWI/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/g9ifxh-qrWI/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=g9ifxh-qrWI" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/g9ifxh-qrWI" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraeGChvF-FsYlvBgjf6kkJHY" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/g9ifxh-qrWI/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/g9ifxh-qrWI?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="414" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAliraofxp_YgxMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="414" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAliraofxp_YgxMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="414" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Далеко-далеко, в домике возле железной дороги, живет маленькая и очень шустрая девочка Маша. Она так любит играть, что прочие обитатели двора от неё просто прячутся. От скуки непоседа убегает в лес, где находится уютный домик Медведя, который ушел на рыбалку. Вернувшийся медведь находит свое жилье в разрушенном состоянии. Он обнаруживает источник беспорядков в самом домике - это прыгающая на кровати маленькая девочка. Медведь всячески пытается избавиться от незваной гостьи. Но когда ему это удается, он вдруг испытывает тревогу за судьбу оставленной в лесу Маши. Медведь бросается на поиски и находит её в своем доме.</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=g9ifxh-qrWI&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/g9ifxh-qrWI/0.jpg" height="360" width="480" time="00:03:27" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/g9ifxh-qrWI/1.jpg" height="90" width="120" time="00:01:43.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/g9ifxh-qrWI/2.jpg" height="90" width="120" time="00:03:27" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/g9ifxh-qrWI/3.jpg" height="90" width="120" time="00:05:10.500" />
	# 			<media:title type="plain">Маша и Медведь : Первая встреча (1 серия)</media:title>
	# 			<yt:duration seconds="414" />
	# 		</media:group>
	# 		<gd:rating average="3.7532468" max="5" min="1" numRaters="231" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="819463" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Далеко-далеко, в домике возле железной дороги, живет маленькая и очень шустрая девочка Маша. Она так любит играть, что прочие обитатели двора от неё просто прячутся. От скуки непоседа убегает в лес, где находится уютный домик Медведя, который ушел на рыбалку. Вернувшийся медведь находит свое жилье в разрушенном состоянии. Он обнаруживает источник беспорядков в самом домике - это прыгающая на кровати маленькая девочка. Медведь всячески пытается избавиться от незваной гостьи. Но когда ему это удается, он вдруг испытывает тревогу за судьбу оставленной в лесу Маши. Медведь бросается на поиски и находит её в своем доме.</yt:description>
	# 		<yt:position>1</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYYSa0kYLaQPWzrE1JMYcbA</id>
	# 		<published>2013-04-22T14:26:45.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : До весны не будить! (2 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Осень. Медведь укладывается в спячку, предварительно забаррикадировавшись в своем доме от Маши. Но Маша все-таки проникает в дом Медведя и устраивает очередной беспорядок, будит уже заснувших пчел. Но любой беспорядок однажды заканчивается, и когда Медведь варит Маше кашу, Маша засыпает.</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/g9ifxh-qrWI" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=vP_1ACIxhqI&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vP_1ACIxhqI/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vP_1ACIxhqI/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=vP_1ACIxhqI" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vP_1ACIxhqI" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYYSa0kYLaQPWzrE1JMYcbA" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/vP_1ACIxhqI/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/vP_1ACIxhqI?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="414" yt:format="5" />
	# 			<media:content url="rtsp://r3---sn-4g57kued.c.youtube.com/CiULENy73wIaHAmihjEiAPX_vBMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="414" yt:format="1" />
	# 			<media:content url="rtsp://r3---sn-4g57kued.c.youtube.com/CiULENy73wIaHAmihjEiAPX_vBMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="414" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Осень. Медведь укладывается в спячку, предварительно забаррикадировавшись в своем доме от Маши. Но Маша все-таки проникает в дом Медведя и устраивает очередной беспорядок, будит уже заснувших пчел. Но любой беспорядок однажды заканчивается, и когда Медведь варит Маше кашу, Маша засыпает.</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=vP_1ACIxhqI&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vP_1ACIxhqI/0.jpg" height="360" width="480" time="00:03:27" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vP_1ACIxhqI/1.jpg" height="90" width="120" time="00:01:43.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vP_1ACIxhqI/2.jpg" height="90" width="120" time="00:03:27" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vP_1ACIxhqI/3.jpg" height="90" width="120" time="00:05:10.500" />
	# 			<media:title type="plain">Маша и Медведь : До весны не будить! (2 серия)</media:title>
	# 			<yt:duration seconds="414" />
	# 		</media:group>
	# 		<gd:rating average="3.8064516" max="5" min="1" numRaters="124" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="244009" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Осень. Медведь укладывается в спячку, предварительно забаррикадировавшись в своем доме от Маши. Но Маша все-таки проникает в дом Медведя и устраивает очередной беспорядок, будит уже заснувших пчел. Но любой беспорядок однажды заканчивается, и когда Медведь варит Маше кашу, Маша засыпает.</yt:description>
	# 		<yt:position>2</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraS44AObtfbbW1_j4vRg0B04</id>
	# 		<published>2013-04-22T13:02:44.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Раз, два, три! Ёлочка, гори! (3 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь настолько любит Новый Год, что ради этого праздника просыпается. Он наводит порядок в своем домике, украшает елку и с нетерпением ждет Деда Мороза. Но вместо него появляется Маша, и праздник превращается в стихийное бедствие: ёлка сгорает, игрушки разбиваются, а Дед Мороз попадает в аварию. Жители леса могут не получить подарки. Тем не менее, и Маша, и Медведь приложили максимум усилий, чтобы исправить положение и встреча Нового года состоялась</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vP_1ACIxhqI" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=6zwFz9rPHYA&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/6zwFz9rPHYA/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/6zwFz9rPHYA/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=6zwFz9rPHYA" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/6zwFz9rPHYA" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraS44AObtfbbW1_j4vRg0B04" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/6zwFz9rPHYA/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/6zwFz9rPHYA?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="487" yt:format="5" />
	# 			<media:content url="rtsp://r5---sn-4g57kuez.c.youtube.com/CiULENy73wIaHAmAHc_azwU86xMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="487" yt:format="1" />
	# 			<media:content url="rtsp://r5---sn-4g57kuez.c.youtube.com/CiULENy73wIaHAmAHc_azwU86xMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="487" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь настолько любит Новый Год, что ради этого праздника просыпается. Он наводит порядок в своем домике, украшает елку и с нетерпением ждет Деда Мороза. Но вместо него появляется Маша, и праздник превращается в стихийное бедствие: ёлка сгорает, игрушки разбиваются, а Дед Мороз попадает в аварию. Жители леса могут не получить подарки. Тем не менее, и Маша, и Медведь приложили максимум усилий, чтобы исправить положение и встреча Нового года состоялась</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=6zwFz9rPHYA&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/6zwFz9rPHYA/0.jpg" height="360" width="480" time="00:04:03.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/6zwFz9rPHYA/1.jpg" height="90" width="120" time="00:02:01.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/6zwFz9rPHYA/2.jpg" height="90" width="120" time="00:04:03.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/6zwFz9rPHYA/3.jpg" height="90" width="120" time="00:06:05.250" />
	# 			<media:title type="plain">Маша и Медведь : Раз, два, три! Ёлочка, гори! (3 серия)</media:title>
	# 			<yt:duration seconds="487" />
	# 		</media:group>
	# 		<gd:rating average="3.4753363" max="5" min="1" numRaters="223" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="367624" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь настолько любит Новый Год, что ради этого праздника просыпается. Он наводит порядок в своем домике, украшает елку и с нетерпением ждет Деда Мороза. Но вместо него появляется Маша, и праздник превращается в стихийное бедствие: ёлка сгорает, игрушки разбиваются, а Дед Мороз попадает в аварию. Жители леса могут не получить подарки. Тем не менее, и Маша, и Медведь приложили максимум усилий, чтобы исправить положение и встреча Нового года состоялась</yt:description>
	# 		<yt:position>3</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYzb_ztdQJegRNLRjo9GZ1k</id>
	# 		<published>2013-04-22T11:37:23.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Ловись рыбка!  (4 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь идет на рыбалку. Блаженствуя, он забрасывает удочку, но как только начинается клёв, появляется Маша, и рыбалка превращается в пытку. Желая нейтрализовать беспокойную девчонку, Медведь дает ей удочку, и она сразу же вытаскивает золотую рыбку.</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/6zwFz9rPHYA" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=Dd4YL1MovfY&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Dd4YL1MovfY/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Dd4YL1MovfY/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=Dd4YL1MovfY" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Dd4YL1MovfY" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYzb_ztdQJegRNLRjo9GZ1k" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/Dd4YL1MovfY/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/Dd4YL1MovfY?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="416" yt:format="5" />
	# 			<media:content url="rtsp://r4---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAn2vShTLxjeDRMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="416" yt:format="1" />
	# 			<media:content url="rtsp://r4---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAn2vShTLxjeDRMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="416" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь идет на рыбалку. Блаженствуя, он забрасывает удочку, но как только начинается клёв, появляется Маша, и рыбалка превращается в пытку. Желая нейтрализовать беспокойную девчонку, Медведь дает ей удочку, и она сразу же вытаскивает золотую рыбку.</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=Dd4YL1MovfY&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Dd4YL1MovfY/0.jpg" height="360" width="480" time="00:03:28" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Dd4YL1MovfY/1.jpg" height="90" width="120" time="00:01:44" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Dd4YL1MovfY/2.jpg" height="90" width="120" time="00:03:28" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Dd4YL1MovfY/3.jpg" height="90" width="120" time="00:05:12" />
	# 			<media:title type="plain">Маша и Медведь : Ловись рыбка!  (4 серия)</media:title>
	# 			<yt:duration seconds="416" />
	# 		</media:group>
	# 		<gd:rating average="3.6853147" max="5" min="1" numRaters="143" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="258573" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь идет на рыбалку. Блаженствуя, он забрасывает удочку, но как только начинается клёв, появляется Маша, и рыбалка превращается в пытку. Желая нейтрализовать беспокойную девчонку, Медведь дает ей удочку, и она сразу же вытаскивает золотую рыбку.</yt:description>
	# 		<yt:position>4</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraW9R1nKSxTKKIDMVZLuWaQo</id>
	# 		<published>2013-04-23T06:53:31.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Весна пришла! (5 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь просыпается весной, выходит на крыльцо, сладко потягивается и видит медведицу. Он моментально влюбляется, рвет подснежники, бежит за ней, но путь ему преграждает Маша. Он пытается от неё избавиться таким образом, чтобы медведица ничего не заметила. Маша всё равно возникает в самые неподходящие моменты. Наконец медведица её замечает и требует от медведя объяснений. Он, стесняясь, пытается объясниться. Медведица предлагает ему сделать выбор - или Маша, или она. Медведь не может сразу определиться, и медведица уходит с другим медведем</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Dd4YL1MovfY" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=vN4pKy2bUoI&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vN4pKy2bUoI/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vN4pKy2bUoI/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=vN4pKy2bUoI" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vN4pKy2bUoI" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraW9R1nKSxTKKIDMVZLuWaQo" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/vN4pKy2bUoI/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/vN4pKy2bUoI?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="422" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kuez.c.youtube.com/CiULENy73wIaHAmCUpstKynevBMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="422" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kuez.c.youtube.com/CiULENy73wIaHAmCUpstKynevBMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="422" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь просыпается весной, выходит на крыльцо, сладко потягивается и видит медведицу. Он моментально влюбляется, рвет подснежники, бежит за ней, но путь ему преграждает Маша. Он пытается от неё избавиться таким образом, чтобы медведица ничего не заметила. Маша всё равно возникает в самые неподходящие моменты. Наконец медведица её замечает и требует от медведя объяснений. Он, стесняясь, пытается объясниться. Медведица предлагает ему сделать выбор - или Маша, или она. Медведь не может сразу определиться, и медведица уходит с другим медведем</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=vN4pKy2bUoI&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vN4pKy2bUoI/0.jpg" height="360" width="480" time="00:03:31" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vN4pKy2bUoI/1.jpg" height="90" width="120" time="00:01:45.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vN4pKy2bUoI/2.jpg" height="90" width="120" time="00:03:31" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/vN4pKy2bUoI/3.jpg" height="90" width="120" time="00:05:16.500" />
	# 			<media:title type="plain">Маша и Медведь : Весна пришла! (5 серия)</media:title>
	# 			<yt:duration seconds="422" />
	# 		</media:group>
	# 		<gd:rating average="4.09434" max="5" min="1" numRaters="106" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="248835" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь просыпается весной, выходит на крыльцо, сладко потягивается и видит медведицу. Он моментально влюбляется, рвет подснежники, бежит за ней, но путь ему преграждает Маша. Он пытается от неё избавиться таким образом, чтобы медведица ничего не заметила. Маша всё равно возникает в самые неподходящие моменты. Наконец медведица её замечает и требует от медведя объяснений. Он, стесняясь, пытается объясниться. Медведица предлагает ему сделать выбор - или Маша, или она. Медведь не может сразу определиться, и медведица уходит с другим медведем</yt:description>
	# 		<yt:position>5</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraRFJ_NGHsbwCJCJ6Cj59lws</id>
	# 		<published>2013-04-23T07:54:04.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Следы невиданных зверей (6 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Выпадает первый снег, и Медведь решает научить Машу распознавать следы разных зверей. Маша оказывается не самой способной ученицей и своими ответами доводит Медведя практически до сумасшествия. Но к его огромному изумлению оказывается, что её ответы не так уж и абсурдны</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/vN4pKy2bUoI" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=BX18GFLMqO8&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/BX18GFLMqO8/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/BX18GFLMqO8/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=BX18GFLMqO8" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/BX18GFLMqO8" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraRFJ_NGHsbwCJCJ6Cj59lws" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/BX18GFLMqO8/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/BX18GFLMqO8?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="438" yt:format="5" />
	# 			<media:content url="rtsp://r1---sn-4g57kuek.c.youtube.com/CiULENy73wIaHAnvqMxSGHx9BRMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="438" yt:format="1" />
	# 			<media:content url="rtsp://r1---sn-4g57kuek.c.youtube.com/CiULENy73wIaHAnvqMxSGHx9BRMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="438" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Выпадает первый снег, и Медведь решает научить Машу распознавать следы разных зверей. Маша оказывается не самой способной ученицей и своими ответами доводит Медведя практически до сумасшествия. Но к его огромному изумлению оказывается, что её ответы не так уж и абсурдны</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=BX18GFLMqO8&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/BX18GFLMqO8/0.jpg" height="360" width="480" time="00:03:39" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/BX18GFLMqO8/1.jpg" height="90" width="120" time="00:01:49.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/BX18GFLMqO8/2.jpg" height="90" width="120" time="00:03:39" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/BX18GFLMqO8/3.jpg" height="90" width="120" time="00:05:28.500" />
	# 			<media:title type="plain">Маша и Медведь : Следы невиданных зверей (6 серия)</media:title>
	# 			<yt:duration seconds="438" />
	# 		</media:group>
	# 		<gd:rating average="3.7169812" max="5" min="1" numRaters="106" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="253934" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Выпадает первый снег, и Медведь решает научить Машу распознавать следы разных зверей. Маша оказывается не самой способной ученицей и своими ответами доводит Медведя практически до сумасшествия. Но к его огромному изумлению оказывается, что её ответы не так уж и абсурдны</yt:description>
	# 		<yt:position>6</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraT4sTW6IKLeTAmay1eY8zAE</id>
	# 		<published>2013-04-23T09:08:35.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : С волками жить (7 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Живущие в лесу волки решают похитить Машу и потребовать с Медведя выкуп. Однако Медведя очень устраивает Машино отсутствие, и он не торопится с выкупом. Маша превращает жизнь волков в ад, и они платят Медведю, лишь бы избавиться от неё</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/BX18GFLMqO8" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=9pT_BTzwr54&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/9pT_BTzwr54/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/9pT_BTzwr54/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=9pT_BTzwr54" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/9pT_BTzwr54" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraT4sTW6IKLeTAmay1eY8zAE" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/9pT_BTzwr54/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/9pT_BTzwr54?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="434" yt:format="5" />
	# 			<media:content url="rtsp://r1---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAmer_A8Bf-U9hMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="434" yt:format="1" />
	# 			<media:content url="rtsp://r1---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAmer_A8Bf-U9hMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="434" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Живущие в лесу волки решают похитить Машу и потребовать с Медведя выкуп. Однако Медведя очень устраивает Машино отсутствие, и он не торопится с выкупом. Маша превращает жизнь волков в ад, и они платят Медведю, лишь бы избавиться от неё</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=9pT_BTzwr54&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/9pT_BTzwr54/0.jpg" height="360" width="480" time="00:03:37" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/9pT_BTzwr54/1.jpg" height="90" width="120" time="00:01:48.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/9pT_BTzwr54/2.jpg" height="90" width="120" time="00:03:37" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/9pT_BTzwr54/3.jpg" height="90" width="120" time="00:05:25.500" />
	# 			<media:title type="plain">Маша и Медведь : С волками жить (7 серия)</media:title>
	# 			<yt:duration seconds="434" />
	# 		</media:group>
	# 		<gd:rating average="3.7727273" max="5" min="1" numRaters="88" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="240611" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Живущие в лесу волки решают похитить Машу и потребовать с Медведя выкуп. Однако Медведя очень устраивает Машино отсутствие, и он не торопится с выкупом. Маша превращает жизнь волков в ад, и они платят Медведю, лишь бы избавиться от неё</yt:description>
	# 		<yt:position>7</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraRHXfdcovnOoN25I7CqysNA</id>
	# 		<published>2013-04-23T10:09:40.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Позвони мне, позвони! (8 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Забавная интерпретация старой притчи о мальчике, который кричал «Волк!!!».
	# Для того,чтобы Маша не мешала Медведю смотреть футбольный матч и без опаски гуляла по лесу, Медведь дает ей мобильный телефон. В результате Маша досаждает его бесконечными звонками, а когда она встречает реальную опасность - волка, Медведь не берет трубку...</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/9pT_BTzwr54" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=DxUKan9AaxY&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/DxUKan9AaxY/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/DxUKan9AaxY/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=DxUKan9AaxY" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/DxUKan9AaxY" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraRHXfdcovnOoN25I7CqysNA" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/DxUKan9AaxY/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/DxUKan9AaxY?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="432" yt:format="5" />
	# 			<media:content url="rtsp://r8---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAkWa0B_agoVDxMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="432" yt:format="1" />
	# 			<media:content url="rtsp://r8---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAkWa0B_agoVDxMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="432" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Забавная интерпретация старой притчи о мальчике, который кричал «Волк!!!».
	# Для того,чтобы Маша не мешала Медведю смотреть футбольный матч и без опаски гуляла по лесу, Медведь дает ей мобильный телефон. В результате Маша досаждает его бесконечными звонками, а когда она встречает реальную опасность - волка, Медведь не берет трубку...</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=DxUKan9AaxY&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/DxUKan9AaxY/0.jpg" height="360" width="480" time="00:03:36" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/DxUKan9AaxY/1.jpg" height="90" width="120" time="00:01:48" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/DxUKan9AaxY/2.jpg" height="90" width="120" time="00:03:36" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/DxUKan9AaxY/3.jpg" height="90" width="120" time="00:05:24" />
	# 			<media:title type="plain">Маша и Медведь : Позвони мне, позвони! (8 серия)</media:title>
	# 			<yt:duration seconds="432" />
	# 		</media:group>
	# 		<gd:rating average="3.8301888" max="5" min="1" numRaters="106" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="273313" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Забавная интерпретация старой притчи о мальчике, который кричал «Волк!!!».
	# Для того,чтобы Маша не мешала Медведю смотреть футбольный матч и без опаски гуляла по лесу, Медведь дает ей мобильный телефон. В результате Маша досаждает его бесконечными звонками, а когда она встречает реальную опасность - волка, Медведь не берет трубку...</yt:description>
	# 		<yt:position>8</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArafLw5up08KbSX3Fc_K4Gb6U</id>
	# 		<published>2013-04-23T11:12:14.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : День варенья (9 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь решает собрать урожай ягод и сварить варенье. Маше эта идея буквально приходится по вкусу - она надкусывает всё, что успевает. После этого она решает поиграть в космонавта, надев на голову стеклянную банку. Медведь пытается её снять с Машиной головы, это ему удается, но теперь в банке оказывается его лапа, и остаток дня проходит в попытках от неё освободиться</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/DxUKan9AaxY" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=aEZtbAT2tCQ&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/aEZtbAT2tCQ/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/aEZtbAT2tCQ/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=aEZtbAT2tCQ" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/aEZtbAT2tCQ" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArafLw5up08KbSX3Fc_K4Gb6U" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/aEZtbAT2tCQ/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/aEZtbAT2tCQ?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="411" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kued.c.youtube.com/CiULENy73wIaHAkktPYEbG1GaBMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="411" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kued.c.youtube.com/CiULENy73wIaHAkktPYEbG1GaBMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="411" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь решает собрать урожай ягод и сварить варенье. Маше эта идея буквально приходится по вкусу - она надкусывает всё, что успевает. После этого она решает поиграть в космонавта, надев на голову стеклянную банку. Медведь пытается её снять с Машиной головы, это ему удается, но теперь в банке оказывается его лапа, и остаток дня проходит в попытках от неё освободиться</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=aEZtbAT2tCQ&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/aEZtbAT2tCQ/0.jpg" height="360" width="480" time="00:03:25.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/aEZtbAT2tCQ/1.jpg" height="90" width="120" time="00:01:42.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/aEZtbAT2tCQ/2.jpg" height="90" width="120" time="00:03:25.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/aEZtbAT2tCQ/3.jpg" height="90" width="120" time="00:05:08.250" />
	# 			<media:title type="plain">Маша и Медведь : День варенья (9 серия)</media:title>
	# 			<yt:duration seconds="411" />
	# 		</media:group>
	# 		<gd:rating average="4.047619" max="5" min="1" numRaters="84" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="309404" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь решает собрать урожай ягод и сварить варенье. Маше эта идея буквально приходится по вкусу - она надкусывает всё, что успевает. После этого она решает поиграть в космонавта, надев на голову стеклянную банку. Медведь пытается её снять с Машиной головы, это ему удается, но теперь в банке оказывается его лапа, и остаток дня проходит в попытках от неё освободиться</yt:description>
	# 		<yt:position>9</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraVuxFsVbnGCBc2zWSObz7XA</id>
	# 		<published>2013-04-23T12:00:23.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Праздник на льду (10 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Маша хочет научиться кататься на коньках. Научить ее некому, а Медведь крепко спит. Это не смущает Машу, которая надевает на него роликовые коньки, «выкатывает» его спящего на речку, где он и просыпается. Другого выхода у Медведя нет: приходится учить непоседливую Машу</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/aEZtbAT2tCQ" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=cj01p7RcUzk&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/cj01p7RcUzk/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/cj01p7RcUzk/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=cj01p7RcUzk" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/cj01p7RcUzk" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraVuxFsVbnGCBc2zWSObz7XA" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/cj01p7RcUzk/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/cj01p7RcUzk?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="413" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAk5U1y0pzU9chMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="413" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAk5U1y0pzU9chMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="413" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Маша хочет научиться кататься на коньках. Научить ее некому, а Медведь крепко спит. Это не смущает Машу, которая надевает на него роликовые коньки, «выкатывает» его спящего на речку, где он и просыпается. Другого выхода у Медведя нет: приходится учить непоседливую Машу</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=cj01p7RcUzk&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/cj01p7RcUzk/0.jpg" height="360" width="480" time="00:03:26.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/cj01p7RcUzk/1.jpg" height="90" width="120" time="00:01:43.250" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/cj01p7RcUzk/2.jpg" height="90" width="120" time="00:03:26.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/cj01p7RcUzk/3.jpg" height="90" width="120" time="00:05:09.750" />
	# 			<media:title type="plain">Маша и Медведь : Праздник на льду (10 серия)</media:title>
	# 			<yt:duration seconds="413" />
	# 		</media:group>
	# 		<gd:rating average="3.3137255" max="5" min="1" numRaters="102" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="294120" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Маша хочет научиться кататься на коньках. Научить ее некому, а Медведь крепко спит. Это не смущает Машу, которая надевает на него роликовые коньки, «выкатывает» его спящего на речку, где он и просыпается. Другого выхода у Медведя нет: приходится учить непоседливую Машу</yt:description>
	# 		<yt:position>10</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYbgej7hL97Vv2U-sTEa9q0</id>
	# 		<published>2013-04-23T12:50:34.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Первый раз в первый класс (11 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# С наступлением сентября, Маша, как и все дети, хочет стать первоклашкой и просит Медведя «сделать» ей школу. Медведь с энтузиазмом берется за дело и уже на следующий день Маша сидит за новенькой партой и пытается стать прилежной ученицей, при этом сводя учителя-Медведя с ума</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/cj01p7RcUzk" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=YEK8iVu_qbo&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/YEK8iVu_qbo/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/YEK8iVu_qbo/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=YEK8iVu_qbo" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/YEK8iVu_qbo" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYbgej7hL97Vv2U-sTEa9q0" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/YEK8iVu_qbo/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/YEK8iVu_qbo?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="428" yt:format="5" />
	# 			<media:content url="rtsp://r6---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAm6qb9bibxCYBMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="428" yt:format="1" />
	# 			<media:content url="rtsp://r6---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAm6qb9bibxCYBMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="428" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# С наступлением сентября, Маша, как и все дети, хочет стать первоклашкой и просит Медведя «сделать» ей школу. Медведь с энтузиазмом берется за дело и уже на следующий день Маша сидит за новенькой партой и пытается стать прилежной ученицей, при этом сводя учителя-Медведя с ума</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=YEK8iVu_qbo&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/YEK8iVu_qbo/0.jpg" height="360" width="480" time="00:03:34" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/YEK8iVu_qbo/1.jpg" height="90" width="120" time="00:01:47" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/YEK8iVu_qbo/2.jpg" height="90" width="120" time="00:03:34" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/YEK8iVu_qbo/3.jpg" height="90" width="120" time="00:05:21" />
	# 			<media:title type="plain">Маша и Медведь : Первый раз в первый класс (11 серия)</media:title>
	# 			<yt:duration seconds="428" />
	# 		</media:group>
	# 		<gd:rating average="3.878049" max="5" min="1" numRaters="82" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="249312" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# С наступлением сентября, Маша, как и все дети, хочет стать первоклашкой и просит Медведя «сделать» ей школу. Медведь с энтузиазмом берется за дело и уже на следующий день Маша сидит за новенькой партой и пытается стать прилежной ученицей, при этом сводя учителя-Медведя с ума</yt:description>
	# 		<yt:position>11</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAradSKZJqzWSS3WQk_Wd6HsHo</id>
	# 		<published>2013-04-23T13:42:23.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Граница на замке (12 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь ждёт урожая моркови. Этого же ждёт прожорливый заяц.
	# Медведю приходит в голову гениальная, на первый взгляд, мысль - напустить на зайца-воришку Машу, которая с увлечением его «гоняет»</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/YEK8iVu_qbo" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=z1OqhRVRdlk&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/z1OqhRVRdlk/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/z1OqhRVRdlk/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=z1OqhRVRdlk" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/z1OqhRVRdlk" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAradSKZJqzWSS3WQk_Wd6HsHo" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/z1OqhRVRdlk/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/z1OqhRVRdlk?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="420" yt:format="5" />
	# 			<media:content url="rtsp://r6---sn-4g57kuel.c.youtube.com/CiULENy73wIaHAlZdlEVhapTzxMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="420" yt:format="1" />
	# 			<media:content url="rtsp://r6---sn-4g57kuel.c.youtube.com/CiULENy73wIaHAlZdlEVhapTzxMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="420" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь ждёт урожая моркови. Этого же ждёт прожорливый заяц.
	# Медведю приходит в голову гениальная, на первый взгляд, мысль - напустить на зайца-воришку Машу, которая с увлечением его «гоняет»</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=z1OqhRVRdlk&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/z1OqhRVRdlk/0.jpg" height="360" width="480" time="00:03:30" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/z1OqhRVRdlk/1.jpg" height="90" width="120" time="00:01:45" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/z1OqhRVRdlk/2.jpg" height="90" width="120" time="00:03:30" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/z1OqhRVRdlk/3.jpg" height="90" width="120" time="00:05:15" />
	# 			<media:title type="plain">Маша и Медведь : Граница на замке (12 серия)</media:title>
	# 			<yt:duration seconds="420" />
	# 		</media:group>
	# 		<gd:rating average="3.7733333" max="5" min="1" numRaters="150" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="287736" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь ждёт урожая моркови. Этого же ждёт прожорливый заяц.
	# Медведю приходит в голову гениальная, на первый взгляд, мысль - напустить на зайца-воришку Машу, которая с увлечением его «гоняет»</yt:description>
	# 		<yt:position>12</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArabasSw-DMxiCv5xESJxca9U</id>
	# 		<published>2013-04-23T14:39:27.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Кто не спрятался, я не виноват (13 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Маша желает играть в прятки. Медведь собирается заняться уборкой в доме, но, понимая, что с Машей это не удастся, соглашается. Маша «прячется», как это делают маленькие дети, просто закрыв глаза ладошками, и Медведь решает спрятаться сам. Он выбирает самые невероятные места. В результате Маша все равно его находит, требует, чтобы он водил и снова «прячется», закрыв глаза ладошками</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/z1OqhRVRdlk" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=-CM08qVRhRw&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/-CM08qVRhRw/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/-CM08qVRhRw/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=-CM08qVRhRw" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/-CM08qVRhRw" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArabasSw-DMxiCv5xESJxca9U" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/-CM08qVRhRw/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/-CM08qVRhRw?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="402" yt:format="5" />
	# 			<media:content url="rtsp://r4---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAkchVGl8jQj-BMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="402" yt:format="1" />
	# 			<media:content url="rtsp://r4---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAkchVGl8jQj-BMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="402" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Маша желает играть в прятки. Медведь собирается заняться уборкой в доме, но, понимая, что с Машей это не удастся, соглашается. Маша «прячется», как это делают маленькие дети, просто закрыв глаза ладошками, и Медведь решает спрятаться сам. Он выбирает самые невероятные места. В результате Маша все равно его находит, требует, чтобы он водил и снова «прячется», закрыв глаза ладошками</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=-CM08qVRhRw&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/-CM08qVRhRw/0.jpg" height="360" width="480" time="00:03:21" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/-CM08qVRhRw/1.jpg" height="90" width="120" time="00:01:40.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/-CM08qVRhRw/2.jpg" height="90" width="120" time="00:03:21" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/-CM08qVRhRw/3.jpg" height="90" width="120" time="00:05:01.500" />
	# 			<media:title type="plain">Маша и Медведь : Кто не спрятался, я не виноват (13 серия)</media:title>
	# 			<yt:duration seconds="402" />
	# 		</media:group>
	# 		<gd:rating average="3.6067417" max="5" min="1" numRaters="89" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="257974" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Маша желает играть в прятки. Медведь собирается заняться уборкой в доме, но, понимая, что с Машей это не удастся, соглашается. Маша «прячется», как это делают маленькие дети, просто закрыв глаза ладошками, и Медведь решает спрятаться сам. Он выбирает самые невероятные места. В результате Маша все равно его находит, требует, чтобы он водил и снова «прячется», закрыв глаза ладошками</yt:description>
	# 		<yt:position>13</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArafmbfgGER3w3BV0z9VGKrng</id>
	# 		<published>2013-04-23T15:30:59.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Лыжню! (14 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь просыпается у себя в кресле с большой шишкой на макушке и кубком чемпиона по биатлону и не может понять, что произошло. Перед ним, с виноватым видом стоят Маша и заяц, которые, оправдываясь, рассказывают разные версии случившегося. Медведю предстоит узнать, какая же из них правдивая</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/-CM08qVRhRw" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=4T3-nCHPX2Q&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/4T3-nCHPX2Q/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/4T3-nCHPX2Q/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=4T3-nCHPX2Q" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/4T3-nCHPX2Q" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArafmbfgGER3w3BV0z9VGKrng" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/4T3-nCHPX2Q/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/4T3-nCHPX2Q?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="420" yt:format="5" />
	# 			<media:content url="rtsp://r5---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAlkX88hnP494RMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="420" yt:format="1" />
	# 			<media:content url="rtsp://r5---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAlkX88hnP494RMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="420" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь просыпается у себя в кресле с большой шишкой на макушке и кубком чемпиона по биатлону и не может понять, что произошло. Перед ним, с виноватым видом стоят Маша и заяц, которые, оправдываясь, рассказывают разные версии случившегося. Медведю предстоит узнать, какая же из них правдивая</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=4T3-nCHPX2Q&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/4T3-nCHPX2Q/0.jpg" height="360" width="480" time="00:03:30" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/4T3-nCHPX2Q/1.jpg" height="90" width="120" time="00:01:45" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/4T3-nCHPX2Q/2.jpg" height="90" width="120" time="00:03:30" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/4T3-nCHPX2Q/3.jpg" height="90" width="120" time="00:05:15" />
	# 			<media:title type="plain">Маша и Медведь : Лыжню! (14 серия)</media:title>
	# 			<yt:duration seconds="420" />
	# 		</media:group>
	# 		<gd:rating average="3.8636363" max="5" min="1" numRaters="88" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="258056" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь просыпается у себя в кресле с большой шишкой на макушке и кубком чемпиона по биатлону и не может понять, что произошло. Перед ним, с виноватым видом стоят Маша и заяц, которые, оправдываясь, рассказывают разные версии случившегося. Медведю предстоит узнать, какая же из них правдивая</yt:description>
	# 		<yt:position>14</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAracDzbtwifX-qmDFSC1VIdK8</id>
	# 		<published>2013-04-24T06:58:09.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Будьте здоровы! (15 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь, уставший от бесконечных игр Маши, решает притвориться больным, чтобы она его не трогала.Заботливая Маша решает вылечить своего друга.После серии неудачных и болезненных опытов ей удается поставить Медведя на ноги</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/4T3-nCHPX2Q" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=08kn1xeKQ14&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/08kn1xeKQ14/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/08kn1xeKQ14/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=08kn1xeKQ14" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/08kn1xeKQ14" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAracDzbtwifX-qmDFSC1VIdK8" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/08kn1xeKQ14/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/08kn1xeKQ14?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="419" yt:format="5" />
	# 			<media:content url="rtsp://r7---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAleQ4oX1yfJ0xMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="419" yt:format="1" />
	# 			<media:content url="rtsp://r7---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAleQ4oX1yfJ0xMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="419" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь, уставший от бесконечных игр Маши, решает притвориться больным, чтобы она его не трогала.Заботливая Маша решает вылечить своего друга.После серии неудачных и болезненных опытов ей удается поставить Медведя на ноги</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=08kn1xeKQ14&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/08kn1xeKQ14/0.jpg" height="360" width="480" time="00:03:29.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/08kn1xeKQ14/1.jpg" height="90" width="120" time="00:01:44.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/08kn1xeKQ14/2.jpg" height="90" width="120" time="00:03:29.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/08kn1xeKQ14/3.jpg" height="90" width="120" time="00:05:14.250" />
	# 			<media:title type="plain">Маша и Медведь : Будьте здоровы! (15 серия)</media:title>
	# 			<yt:duration seconds="419" />
	# 		</media:group>
	# 		<gd:rating average="3.945055" max="5" min="1" numRaters="91" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="288715" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь, уставший от бесконечных игр Маши, решает притвориться больным, чтобы она его не трогала.Заботливая Маша решает вылечить своего друга.После серии неудачных и болезненных опытов ей удается поставить Медведя на ноги</yt:description>
	# 		<yt:position>15</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraal2WnJNiGXNkUmncitv8ys</id>
	# 		<published>2013-04-22T09:30:21.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Маша + каша (16 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь играет в шашки. Маша прерывает игру просьбой её покормить. Медведь готовит ей кашу, которая Маше не понравилась. Медведь обиделся и ушёл играть в шашки в лес. Маша решила сварить свою кашу, которая вскоре очень сильно разбухла. И Маша, и Медведь, и все обитатели леса будут долго-долго вспоминать этот необыкновенный день</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/08kn1xeKQ14" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=TS5hy6v79ks&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/TS5hy6v79ks/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/TS5hy6v79ks/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=TS5hy6v79ks" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/TS5hy6v79ks" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraal2WnJNiGXNkUmncitv8ys" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/TS5hy6v79ks/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/TS5hy6v79ks?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="413" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kued.c.youtube.com/CiULENy73wIaHAlL9vury2EuTRMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="413" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kued.c.youtube.com/CiULENy73wIaHAlL9vury2EuTRMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="413" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь играет в шашки. Маша прерывает игру просьбой её покормить. Медведь готовит ей кашу, которая Маше не понравилась. Медведь обиделся и ушёл играть в шашки в лес. Маша решила сварить свою кашу, которая вскоре очень сильно разбухла. И Маша, и Медведь, и все обитатели леса будут долго-долго вспоминать этот необыкновенный день</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=TS5hy6v79ks&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/TS5hy6v79ks/0.jpg" height="360" width="480" time="00:03:26.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/TS5hy6v79ks/1.jpg" height="90" width="120" time="00:01:43.250" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/TS5hy6v79ks/2.jpg" height="90" width="120" time="00:03:26.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/TS5hy6v79ks/3.jpg" height="90" width="120" time="00:05:09.750" />
	# 			<media:title type="plain">Маша и Медведь : Маша + каша (16 серия)</media:title>
	# 			<yt:duration seconds="413" />
	# 		</media:group>
	# 		<gd:rating average="3.754386" max="5" min="1" numRaters="228" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="379219" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь играет в шашки. Маша прерывает игру просьбой её покормить. Медведь готовит ей кашу, которая Маше не понравилась. Медведь обиделся и ушёл играть в шашки в лес. Маша решила сварить свою кашу, которая вскоре очень сильно разбухла. И Маша, и Медведь, и все обитатели леса будут долго-долго вспоминать этот необыкновенный день</yt:description>
	# 		<yt:position>16</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAradQrOswXumk2CA0IDvTERoU</id>
	# 		<published>2013-04-24T06:38:54.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Дальний родственник (17 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю в гости приезжает его малолетний племянник Панда. Маша, увидев его, сразу захотела с ним поиграть. В малышах просыпается «дух соревнования» и они не могут поделить между собой ни чемодан, ни конфеты, ни вообще что-нибудь, попавшееся им на глаза. Медведь вовремя понимает, что если направить их соперничество в правильное русло, Маша и племянник могут прекрасно помочь ему по дому</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/TS5hy6v79ks" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=qgclo7A4VjY&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/qgclo7A4VjY/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/qgclo7A4VjY/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=qgclo7A4VjY" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/qgclo7A4VjY" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAradQrOswXumk2CA0IDvTERoU" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/qgclo7A4VjY/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/qgclo7A4VjY?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="419" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kuez.c.youtube.com/CiULENy73wIaHAk2VjiwoyUHqhMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="419" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kuez.c.youtube.com/CiULENy73wIaHAk2VjiwoyUHqhMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="419" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю в гости приезжает его малолетний племянник Панда. Маша, увидев его, сразу захотела с ним поиграть. В малышах просыпается «дух соревнования» и они не могут поделить между собой ни чемодан, ни конфеты, ни вообще что-нибудь, попавшееся им на глаза. Медведь вовремя понимает, что если направить их соперничество в правильное русло, Маша и племянник могут прекрасно помочь ему по дому</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=qgclo7A4VjY&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/qgclo7A4VjY/0.jpg" height="360" width="480" time="00:03:29.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/qgclo7A4VjY/1.jpg" height="90" width="120" time="00:01:44.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/qgclo7A4VjY/2.jpg" height="90" width="120" time="00:03:29.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/qgclo7A4VjY/3.jpg" height="90" width="120" time="00:05:14.250" />
	# 			<media:title type="plain">Маша и Медведь : Дальний родственник (17 серия)</media:title>
	# 			<yt:duration seconds="419" />
	# 		</media:group>
	# 		<gd:rating average="3.5391304" max="5" min="1" numRaters="115" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="309381" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю в гости приезжает его малолетний племянник Панда. Маша, увидев его, сразу захотела с ним поиграть. В малышах просыпается «дух соревнования» и они не могут поделить между собой ни чемодан, ни конфеты, ни вообще что-нибудь, попавшееся им на глаза. Медведь вовремя понимает, что если направить их соперничество в правильное русло, Маша и племянник могут прекрасно помочь ему по дому</yt:description>
	# 		<yt:position>17</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArafCAWAj4rIcPlRbLmJL2VXE</id>
	# 		<published>2013-04-23T17:04:38.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Большая стирка (18 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь устраивает на своём дворе большую стирку. Он ещё не знает, что скоро ему придётся не только вытаскивать неугомонную Машу из лужи или банки с вареньем, но и шить ей каждый раз новые наряды</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/qgclo7A4VjY" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=OgacG0Zvwbo&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/OgacG0Zvwbo/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/OgacG0Zvwbo/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=OgacG0Zvwbo" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/OgacG0Zvwbo" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpArafCAWAj4rIcPlRbLmJL2VXE" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/OgacG0Zvwbo/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/OgacG0Zvwbo?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="407" yt:format="5" />
	# 			<media:content url="rtsp://r7---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAm6wW9GG5wGOhMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="407" yt:format="1" />
	# 			<media:content url="rtsp://r7---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAm6wW9GG5wGOhMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="407" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь устраивает на своём дворе большую стирку. Он ещё не знает, что скоро ему придётся не только вытаскивать неугомонную Машу из лужи или банки с вареньем, но и шить ей каждый раз новые наряды</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=OgacG0Zvwbo&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/OgacG0Zvwbo/0.jpg" height="360" width="480" time="00:03:23.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/OgacG0Zvwbo/1.jpg" height="90" width="120" time="00:01:41.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/OgacG0Zvwbo/2.jpg" height="90" width="120" time="00:03:23.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/OgacG0Zvwbo/3.jpg" height="90" width="120" time="00:05:05.250" />
	# 			<media:title type="plain">Маша и Медведь : Большая стирка (18 серия)</media:title>
	# 			<yt:duration seconds="407" />
	# 		</media:group>
	# 		<gd:rating average="3.3082438" max="5" min="1" numRaters="558" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="485499" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь устраивает на своём дворе большую стирку. Он ещё не знает, что скоро ему придётся не только вытаскивать неугомонную Машу из лужи или банки с вареньем, но и шить ей каждый раз новые наряды</yt:description>
	# 		<yt:position>18</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraVB1qridhfaRK-LfFIiK8Bg</id>
	# 		<published>2013-04-23T17:57:03.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Репетиция оркестра (19 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь находит черный рояль в лесу. Довольный, он относит его домой, настраивает и начинает музицировать. Но Маша решает стать всемирно известным пианистом и просит Медведя научить ее играть</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/OgacG0Zvwbo" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=X0nNBPuhzDw&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/X0nNBPuhzDw/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/X0nNBPuhzDw/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=X0nNBPuhzDw" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/X0nNBPuhzDw" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraVB1qridhfaRK-LfFIiK8Bg" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/X0nNBPuhzDw/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/X0nNBPuhzDw?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="434" yt:format="5" />
	# 			<media:content url="rtsp://r5---sn-4g57kued.c.youtube.com/CiULENy73wIaHAk8zKH7BM1JXxMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="434" yt:format="1" />
	# 			<media:content url="rtsp://r5---sn-4g57kued.c.youtube.com/CiULENy73wIaHAk8zKH7BM1JXxMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="434" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь находит черный рояль в лесу. Довольный, он относит его домой, настраивает и начинает музицировать. Но Маша решает стать всемирно известным пианистом и просит Медведя научить ее играть</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=X0nNBPuhzDw&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/X0nNBPuhzDw/0.jpg" height="360" width="480" time="00:03:37" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/X0nNBPuhzDw/1.jpg" height="90" width="120" time="00:01:48.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/X0nNBPuhzDw/2.jpg" height="90" width="120" time="00:03:37" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/X0nNBPuhzDw/3.jpg" height="90" width="120" time="00:05:25.500" />
	# 			<media:title type="plain">Маша и Медведь : Репетиция оркестра (19 серия)</media:title>
	# 			<yt:duration seconds="434" />
	# 		</media:group>
	# 		<gd:rating average="3.6216216" max="5" min="1" numRaters="148" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="220197" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Медведь находит черный рояль в лесу. Довольный, он относит его домой, настраивает и начинает музицировать. Но Маша решает стать всемирно известным пианистом и просит Медведя научить ее играть</yt:description>
	# 		<yt:position>19</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYAx26_GnVckzZgDzakR9gk</id>
	# 		<published>2013-04-23T18:51:46.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Усатый - Полосатый (20 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю в гости приезжает старый друг, с которым они выступали в цирке, - Тигр. Познакомившись с Машей, Усатый-Полосатый приходит в недоумение от ее выходок и всячески пытается от нее избавиться. Однако, он меняет свое мнение о малышке после того, как Маша с Медведем спасают его, заблудившегося в лесу ночью</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/X0nNBPuhzDw" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=Sz1kSBRtj2I&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Sz1kSBRtj2I/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Sz1kSBRtj2I/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=Sz1kSBRtj2I" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Sz1kSBRtj2I" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraYAx26_GnVckzZgDzakR9gk" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/Sz1kSBRtj2I/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/Sz1kSBRtj2I?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="435" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kued.c.youtube.com/CiULENy73wIaHAlij20USGQ9SxMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="435" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kued.c.youtube.com/CiULENy73wIaHAlij20USGQ9SxMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="435" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю в гости приезжает старый друг, с которым они выступали в цирке, - Тигр. Познакомившись с Машей, Усатый-Полосатый приходит в недоумение от ее выходок и всячески пытается от нее избавиться. Однако, он меняет свое мнение о малышке после того, как Маша с Медведем спасают его, заблудившегося в лесу ночью</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=Sz1kSBRtj2I&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Sz1kSBRtj2I/0.jpg" height="360" width="480" time="00:03:37.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Sz1kSBRtj2I/1.jpg" height="90" width="120" time="00:01:48.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Sz1kSBRtj2I/2.jpg" height="90" width="120" time="00:03:37.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/Sz1kSBRtj2I/3.jpg" height="90" width="120" time="00:05:26.250" />
	# 			<media:title type="plain">Маша и Медведь : Усатый - Полосатый (20 серия)</media:title>
	# 			<yt:duration seconds="435" />
	# 		</media:group>
	# 		<gd:rating average="3.64" max="5" min="1" numRaters="100" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="192582" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю в гости приезжает старый друг, с которым они выступали в цирке, - Тигр. Познакомившись с Машей, Усатый-Полосатый приходит в недоумение от ее выходок и всячески пытается от нее избавиться. Однако, он меняет свое мнение о малышке после того, как Маша с Медведем спасают его, заблудившегося в лесу ночью</yt:description>
	# 		<yt:position>20</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraaJ_giKycCdPf3zz5sNBUX8</id>
	# 		<published>2013-04-23T19:46:14.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Один дома (21 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Под Новый год всегда происходят чудеса. Маша находит волшебную шляпу, в
	# которой найдутся подарки для всех лесных обитателей. Счастливая Маша бегает по лесу в клоунском наряде и приносит радость всем зверям. Особый подарок есть у шляпы и для Медведя, которому не очень-то везло в этот праздничный день</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/Sz1kSBRtj2I" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=QOqLjMbnT7s&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/QOqLjMbnT7s/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/QOqLjMbnT7s/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=QOqLjMbnT7s" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/QOqLjMbnT7s" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraaJ_giKycCdPf3zz5sNBUX8" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/QOqLjMbnT7s/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/QOqLjMbnT7s?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="431" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kuel.c.youtube.com/CiULENy73wIaHAm7T-fGjIvqQBMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="431" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kuel.c.youtube.com/CiULENy73wIaHAm7T-fGjIvqQBMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="431" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Под Новый год всегда происходят чудеса. Маша находит волшебную шляпу, в
	# которой найдутся подарки для всех лесных обитателей. Счастливая Маша бегает по лесу в клоунском наряде и приносит радость всем зверям. Особый подарок есть у шляпы и для Медведя, которому не очень-то везло в этот праздничный день</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=QOqLjMbnT7s&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/QOqLjMbnT7s/0.jpg" height="360" width="480" time="00:03:35.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/QOqLjMbnT7s/1.jpg" height="90" width="120" time="00:01:47.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/QOqLjMbnT7s/2.jpg" height="90" width="120" time="00:03:35.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/QOqLjMbnT7s/3.jpg" height="90" width="120" time="00:05:23.250" />
	# 			<media:title type="plain">Маша и Медведь : Один дома (21 серия)</media:title>
	# 			<yt:duration seconds="431" />
	# 		</media:group>
	# 		<gd:rating average="3.8387096" max="5" min="1" numRaters="93" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="179623" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Под Новый год всегда происходят чудеса. Маша находит волшебную шляпу, в
	# которой найдутся подарки для всех лесных обитателей. Счастливая Маша бегает по лесу в клоунском наряде и приносит радость всем зверям. Особый подарок есть у шляпы и для Медведя, которому не очень-то везло в этот праздничный день</yt:description>
	# 		<yt:position>21</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraWXt9m4MG1cAjFjuOyeTQIo</id>
	# 		<published>2013-04-23T20:40:38.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Дышите! Не дышите! (22 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Солнечный летний день. Медведь, собирая ягоды, встречает в лесу Медведицу и назначает ей свидание. Вернувшись домой, он начинает генеральную уборку и решает испечь для медведицы пирог. Когда пирог готов, Медведь украшает его сверху клубничками, а затем замечает, что появившаяся из ниоткуда Маша эти клубнички съедает и начинает громко икать. Какие только способы Медведь не вычитывал в Медицинской энциклопедии, чтобы остановить Машино икание! 
	# В итоге, икота заразила всех: и Машу, и Медведя, и Медведицу, и других лесных жителей...</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/QOqLjMbnT7s" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=3ucMtFyAbno&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/3ucMtFyAbno/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/3ucMtFyAbno/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=3ucMtFyAbno" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/3ucMtFyAbno" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraWXt9m4MG1cAjFjuOyeTQIo" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/3ucMtFyAbno/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/3ucMtFyAbno?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="431" yt:format="5" />
	# 			<media:content url="rtsp://r2---sn-4g57kues.c.youtube.com/CiULENy73wIaHAl6boBctAzn3hMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="431" yt:format="1" />
	# 			<media:content url="rtsp://r2---sn-4g57kues.c.youtube.com/CiULENy73wIaHAl6boBctAzn3hMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="431" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Солнечный летний день. Медведь, собирая ягоды, встречает в лесу Медведицу и назначает ей свидание. Вернувшись домой, он начинает генеральную уборку и решает испечь для медведицы пирог. Когда пирог готов, Медведь украшает его сверху клубничками, а затем замечает, что появившаяся из ниоткуда Маша эти клубнички съедает и начинает громко икать. Какие только способы Медведь не вычитывал в Медицинской энциклопедии, чтобы остановить Машино икание! 
	# В итоге, икота заразила всех: и Машу, и Медведя, и Медведицу, и других лесных жителей...</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=3ucMtFyAbno&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/3ucMtFyAbno/0.jpg" height="360" width="480" time="00:03:35.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/3ucMtFyAbno/1.jpg" height="90" width="120" time="00:01:47.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/3ucMtFyAbno/2.jpg" height="90" width="120" time="00:03:35.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/3ucMtFyAbno/3.jpg" height="90" width="120" time="00:05:23.250" />
	# 			<media:title type="plain">Маша и Медведь : Дышите! Не дышите! (22 серия)</media:title>
	# 			<yt:duration seconds="431" />
	# 		</media:group>
	# 		<gd:rating average="3.8301888" max="5" min="1" numRaters="106" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="235576" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# Солнечный летний день. Медведь, собирая ягоды, встречает в лесу Медведицу и назначает ей свидание. Вернувшись домой, он начинает генеральную уборку и решает испечь для медведицы пирог. Когда пирог готов, Медведь украшает его сверху клубничками, а затем замечает, что появившаяся из ниоткуда Маша эти клубнички съедает и начинает громко икать. Какие только способы Медведь не вычитывал в Медицинской энциклопедии, чтобы остановить Машино икание! 
	# В итоге, икота заразила всех: и Машу, и Медведя, и Медведицу, и других лесных жителей...</yt:description>
	# 		<yt:position>22</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraR5t-GdLV0gKCqaVDrsFJOQ</id>
	# 		<published>2013-04-23T21:32:28.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Подкидыш (23 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# В лесу Маша находит большое яйцо. Кто же там сидит? Вместе с Мишкой они узнают, что это пингвиненок, но, чтобы он появился на свет, яйцо нужно высиживать, чем ,по мнению Маши, и должен заняться Медведь. После того, как малыш появился на свет, они с Машей и Медведем стали одной большой семьей</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/3ucMtFyAbno" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=giMZFijdP1s&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/giMZFijdP1s/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/giMZFijdP1s/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=giMZFijdP1s" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/giMZFijdP1s" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraR5t-GdLV0gKCqaVDrsFJOQ" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/giMZFijdP1s/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/giMZFijdP1s?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="435" yt:format="5" />
	# 			<media:content url="rtsp://r8---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAlbP90oFhkjghMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="435" yt:format="1" />
	# 			<media:content url="rtsp://r8---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAlbP90oFhkjghMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="435" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# В лесу Маша находит большое яйцо. Кто же там сидит? Вместе с Мишкой они узнают, что это пингвиненок, но, чтобы он появился на свет, яйцо нужно высиживать, чем ,по мнению Маши, и должен заняться Медведь. После того, как малыш появился на свет, они с Машей и Медведем стали одной большой семьей</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=giMZFijdP1s&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM MD TM BY RU TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/giMZFijdP1s/0.jpg" height="360" width="480" time="00:03:37.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/giMZFijdP1s/1.jpg" height="90" width="120" time="00:01:48.750" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/giMZFijdP1s/2.jpg" height="90" width="120" time="00:03:37.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/giMZFijdP1s/3.jpg" height="90" width="120" time="00:05:26.250" />
	# 			<media:title type="plain">Маша и Медведь : Подкидыш (23 серия)</media:title>
	# 			<yt:duration seconds="435" />
	# 		</media:group>
	# 		<gd:rating average="3.4501846" max="5" min="1" numRaters="271" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="286603" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# В лесу Маша находит большое яйцо. Кто же там сидит? Вместе с Мишкой они узнают, что это пингвиненок, но, чтобы он появился на свет, яйцо нужно высиживать, чем ,по мнению Маши, и должен заняться Медведь. После того, как малыш появился на свет, они с Машей и Медведем стали одной большой семьей</yt:description>
	# 		<yt:position>23</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraSjNes1iA2dUjQ1nl_FC56o</id>
	# 		<published>2013-04-23T22:26:14.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Приятного аппетита (24 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю снова приезжает его дальний родственник - Панда. Они начинают лепить китайские пельмени, но тут появляется неугомонная Маша, у которой, как всегда, есть свои собственные методы приготовления еды. Так обычная готовка превращается в весёлый кулинарный мастер-класс!</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/giMZFijdP1s" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=R_4-yixaxQc&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/R_4-yixaxQc/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/R_4-yixaxQc/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=R_4-yixaxQc" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/R_4-yixaxQc" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraSjNes1iA2dUjQ1nl_FC56o" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/R_4-yixaxQc/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/R_4-yixaxQc?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="433" yt:format="5" />
	# 			<media:content url="rtsp://r7---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAkHxVosyj7-RxMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="433" yt:format="1" />
	# 			<media:content url="rtsp://r7---sn-4g57kuee.c.youtube.com/CiULENy73wIaHAkHxVosyj7-RxMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="433" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю снова приезжает его дальний родственник - Панда. Они начинают лепить китайские пельмени, но тут появляется неугомонная Маша, у которой, как всегда, есть свои собственные методы приготовления еды. Так обычная готовка превращается в весёлый кулинарный мастер-класс!</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=R_4-yixaxQc&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/R_4-yixaxQc/0.jpg" height="360" width="480" time="00:03:36.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/R_4-yixaxQc/1.jpg" height="90" width="120" time="00:01:48.250" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/R_4-yixaxQc/2.jpg" height="90" width="120" time="00:03:36.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/R_4-yixaxQc/3.jpg" height="90" width="120" time="00:05:24.750" />
	# 			<media:title type="plain">Маша и Медведь : Приятного аппетита (24 серия)</media:title>
	# 			<yt:duration seconds="433" />
	# 		</media:group>
	# 		<gd:rating average="3.6770427" max="5" min="1" numRaters="257" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="310786" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# К Медведю снова приезжает его дальний родственник - Панда. Они начинают лепить китайские пельмени, но тут появляется неугомонная Маша, у которой, как всегда, есть свои собственные методы приготовления еды. Так обычная готовка превращается в весёлый кулинарный мастер-класс!</yt:description>
	# 		<yt:position>24</yt:position>
	# 	</entry>
	# 	<entry>
	# 		<id>ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraRfwd4GVxoWmiAUKozLXGH0</id>
	# 		<published>2013-04-24T07:41:49.000Z</published>
	# 		<updated>1970-01-01T00:00:00.000Z</updated>
	# 		<category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
	# 		<category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Shows" label="Shows" />
	# 		<title type="text">Маша и Медведь : Фокус-покус (25 серия)</title>
	# 		<content type="text">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# На улице ливень, поэтому Медведь, уверенный, что в такую погоду Маша непременно останется дома, увлечённо берётся за книгу. Но вскоре на пороге его дома появляется Маша, которая тоже хочет читать. Медведь думает, чем бы занять девочку, и показывает ей сундук фокусника, что, конечно, было не самой удачной идеей, потому что Маша начинает тестировать на Медведе все предметы подряд - от палочки до перчаток. Чтобы спокойно дочитать книгу, Медведь решает спрятаться в волшебном ящике, но благодаря Маше эта идея оборачивается необыкновенным фокусом</content>
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.in-response-to" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/R_4-yixaxQc" />
	# 		<link rel="alternate" type="text/html" href="https://www.youtube.com/watch?v=pZGy6YtEDJw&amp;feature=youtube_gdata" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/pZGy6YtEDJw/responses" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/pZGy6YtEDJw/related" />
	# 		<link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="https://m.youtube.com/details?v=pZGy6YtEDJw" />
	# 		<link rel="related" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/videos/pZGy6YtEDJw" />
	# 		<link rel="self" type="application/atom+xml" href="https://gdata.youtube.com/feeds/api/playlists/ELjmAb7RB9ylU/-Cd8TQ7AAVmKFfFehpAraRfwd4GVxoWmiAUKozLXGH0" />
	# 		<author>
	# 			<name>mashaimedved</name>
	# 			<uri>https://gdata.youtube.com/feeds/api/users/mashaimedved</uri>
	# 		</author>
	# 		<gd:comments>
	# 			<gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="https://gdata.youtube.com/feeds/api/videos/pZGy6YtEDJw/comments" countHint="0" />
	# 		</gd:comments>
	# 		<yt:hd />
	# 		<media:group>
	# 			<media:category label="Shows" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Shows</media:category>
	# 			<media:content url="https://www.youtube.com/v/pZGy6YtEDJw?version=3&amp;f=playlists&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="433" yt:format="5" />
	# 			<media:content url="rtsp://r7---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAmcDESL6bKRpRMYDSANFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="433" yt:format="1" />
	# 			<media:content url="rtsp://r7---sn-4g57kue6.c.youtube.com/CiULENy73wIaHAmcDESL6bKRpRMYESARFEgGUglwbGF5bGlzdHMM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="433" yt:format="6" />
	# 			<media:description type="plain">Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# На улице ливень, поэтому Медведь, уверенный, что в такую погоду Маша непременно останется дома, увлечённо берётся за книгу. Но вскоре на пороге его дома появляется Маша, которая тоже хочет читать. Медведь думает, чем бы занять девочку, и показывает ей сундук фокусника, что, конечно, было не самой удачной идеей, потому что Маша начинает тестировать на Медведе все предметы подряд - от палочки до перчаток. Чтобы спокойно дочитать книгу, Медведь решает спрятаться в волшебном ящике, но благодаря Маше эта идея оборачивается необыкновенным фокусом</media:description>
	# 			<media:keywords />
	# 			<media:player url="https://www.youtube.com/watch?v=pZGy6YtEDJw&amp;feature=youtube_gdata_player" />
	# 			<media:restriction type="country" relationship="allow">UA KG AM RU TM BY MD TJ UZ KZ AZ</media:restriction>
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/pZGy6YtEDJw/0.jpg" height="360" width="480" time="00:03:36.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/pZGy6YtEDJw/1.jpg" height="90" width="120" time="00:01:48.250" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/pZGy6YtEDJw/2.jpg" height="90" width="120" time="00:03:36.500" />
	# 			<media:thumbnail url="https://i1.ytimg.com/vi/pZGy6YtEDJw/3.jpg" height="90" width="120" time="00:05:24.750" />
	# 			<media:title type="plain">Маша и Медведь : Фокус-покус (25 серия)</media:title>
	# 			<yt:duration seconds="433" />
	# 		</media:group>
	# 		<gd:rating average="3.6092715" max="5" min="1" numRaters="302" rel="http://schemas.google.com/g/2005#overall" />
	# 		<yt:statistics favoriteCount="0" viewCount="381312" />
	# 		<yt:description>Наш официальный сайт Маша и Медведь http://www.mashabear.ru
	# Маша и Медведь все серии подряд - http://bit.ly/15woR0s
	# Маша и Медведь во Вконтакте - http://vk.com/mashaimedvedtv
	# 
	# Все серии доступны в HD-качестве! Выберите "изменить качество" в правом нижнем углу плеера.
	# 
	# На улице ливень, поэтому Медведь, уверенный, что в такую погоду Маша непременно останется дома, увлечённо берётся за книгу. Но вскоре на пороге его дома появляется Маша, которая тоже хочет читать. Медведь думает, чем бы занять девочку, и показывает ей сундук фокусника, что, конечно, было не самой удачной идеей, потому что Маша начинает тестировать на Медведе все предметы подряд - от палочки до перчаток. Чтобы спокойно дочитать книгу, Медведь решает спрятаться в волшебном ящике, но благодаря Маше эта идея оборачивается необыкновенным фокусом</yt:description>
	# 		<yt:position>25</yt:position>
	# 	</entry>
	# </feed>

	# max-results
	# https://developers.google.com/youtube/2.0/reference#max-resultssp
	# > The default value of this parameter is 25, and the maximum value is 50.

	$xml = @file_get_contents('https://gdata.youtube.com/feeds/api/playlists/'.$playlist_id.'?max-results=50');
	if ($xml === false) {
		return null;
	}

	# Using PHP SimpleXML to get XML Namespace Elements
	# http://blog.sherifmansour.com/?p=302
	$root = new SimpleXmlElement($xml);
	$ns = $root->getNamespaces('recursively');

	$ret = array();
	foreach ($root->entry as $entry) {
		$url = $entry->children($ns['media'])->group->player->attributes()->url;
		parse_str(parse_url($url, PHP_URL_QUERY), $url_query);
		$video = array(
			'no' => intval($entry->children($ns['yt'])->position),
			'id' => (string) $url_query['v'],
			'title' => (string) $entry->title,
			'description' => (string) $entry->children($ns['media'])->group->description,
			'duration' => gmdate('H:i:s', intval($entry->children($ns['media'])->group->children($ns['yt'])->duration->attributes()->seconds)),
			'url' => 'http://www.youtube.com/watch?v='.$url_query['v'],
		);
		$ret[] = $video;
	}
	return $ret;
}
