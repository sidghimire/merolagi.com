--
-- Database: `ccsnea2i_merolagi_employer_message`
--
CREATE DATABASE IF NOT EXISTS `ccsnea2i_merolagi_employer_message` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ccsnea2i_merolagi_employer_message`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blogTitle` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `blogContent` longtext NOT NULL,
  `coverPhoto` varchar(255) NOT NULL,
  `metaDescription` varchar(255) NOT NULL,
  `metaKeyword` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `blogUniqueId` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `visitors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogTitle`, `category`, `blogContent`, `coverPhoto`, `metaDescription`, `metaKeyword`, `userId`, `createdDate`, `status`, `blogUniqueId`, `views`, `visitors`) VALUES
(14, '\'Martian\' Book Review', 'Technology', '<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">How often do we watch a movie and say, &ldquo;That Blew My Mind.&rdquo; Well apparently quite often but this movie will blow your mind off this planet to a far off land, untouched, unexplored, we are talking about Mars. This 2015, movie by Ridley Scott does a really great job in putting your mind out of your comfort zone. This visionary movie not only embarks the experience of a man stranded on this remote planet but also gives people a wide range of practical ideas about how deep space exploration works and what would it exactly look like. However this movie does use of lot of abusive language which does perfectly fits to portray human psychology and human reaction during stressful moments.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">This movie begins with visuals of beautiful landscapes of red planet, Mars. The CGI and directing team seems to have done phenomenal work and lot of focus has been paid from the beginning of the movie where the crew has tried to get all the science and physics correct making this movie somewhat closer the sensation of actually being in this planet. The directors also have dedicated a lot of time on focusing on the important details like the color of the sky, the topographical areas, vast deserts, and winds in mars. The scene then proceeds to couple of astronaut working in the Martian surface while a huge sand storm forces them to abort their mission and return back to earth. During this process the protagonist of this movie, Oscar winning actor, Matt Damon who plays the role of astronaut Mark Whitney gets lost in the storm after being hit by a debris and due to lack of vision, the rocket led by Melissa Lewis, played by actress Jessica Chastain, took off leaving him alone in mars hoping he was dead. But to everyone&rsquo;s surprise he survives and wakes up the next day finding himself all alone, the only man in a planet.&nbsp;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">The movie portrays a lot of realistic scenarios including the pressure to the scientists on earth who had to declare the death of Mark Whitney and face the embarrassment that left a stain on the reputation of that organization. But in that planet 290 million km away from home, the whole world fell upon astronaut Mark Whitney&rsquo;s head when he realized his friends had abandoned him. He enters into an extreme state of mental pain and anxiety and why would he not. The feeling of being alone and thought of miserable death is incomprehensible to a perfectly normal brain but in this movie, Matt Daemon has played a fantastic role and has dived deep into his character. Hence, Oscar nomination for &ldquo;Best Actor in Leading Role&rdquo; is well deserved.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">The plot of this movie is full of survival skills, well I would say extreme survival skills cause he had to survive in a planet where nothing grows and he had very limited supply of food and resources. Immersing yourself deep into this movie, there has been a frequent use of inappropriate words but this is very reasonable as it has provided the sense of stress the astronaut is going through. Back home, we come to know that the next mission launch would take a while, however they rush for the rescue mission trying to make it as quick as possible.&nbsp;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">In deep space, astronaut Mark Whitney finally decides that death is not an option for him. Hence, he had to survive and many things could go wrong. The oxygenator could break and he would suffocate and die, or the water reclaimer could break and he could suffocate and die, or if the hab beaches he would implode and die, and if nothing happened he would run out of food and starve and die. When all the odds were against him, he decided that he had to somehow survive for 3 years for next mars mission and here I quote the most inspirational line from the movie by Mark Whitney, &ldquo;</span></span><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#333333\"><em>At some point, everything&#39;s gonna go south on you and you&#39;re going to say, this is it. This is how I end. Now you can either accept that, or you can get to work. That&#39;s all it is. You just begin. You do the math. You solve one problem and you solve the next one, and then the next. And if you solve enough problems, you get to come home</em></span></span><span style=\"font-family:\'Helvetica Neue\',sans-serif\"><span style=\"color:#333333\"><em>.&rdquo;&nbsp;</em></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Then Mark Whitney embarks on a mission of survival. Luckily this guy is a botanist and with some potatoes in their camp in mars, he has to science everything out and grow potatoes. He uses all his knowledge back from earth and tries to cultivate potatoes. He uses human waste from that mission which was still present in the camp, as fertilizers and make a proper space with soil from mars and successfully grows potatoes there. But it was not yet sufficient for his survival and he had to grow more. Although this might seem normal for us earthlings, this is a huge milestone for a man stranded in nowhere. Here is another line from the movie which explain the sense of humor of the lonely astronaut. &ldquo;</span></span><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\"><em>They say once you grow crops somewhere, you have officially colonized it. So, technically, I colonized Mars. In your face, Neil Armstrong! </em></span></span><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">&rdquo; He also comforts himself humorously by saying, &ldquo;</span></span><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\"><em>I am the greatest botanist on this planet.</em></span></span><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">&rdquo;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">For the time being, he had the food and water sorted out but he had no idea how he was supposed to escape that planet and return home. But this genius recognizes that from the previous mars mission a communicator was isolated in that planet which he could use to talk to scientists back home. So uses his mars rover over several trips to fetch that communicator and with his mechanical skills recovers it and successfully makes contact people back in earth. But since the device was old, he couldn&rsquo;t send text data but he sorts this problem too and uses the head of the rotatable camera to ask yes or no questions with the scientists. This helps him know when the mission was coming and what the rescue plans were.&nbsp;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Well gradually the chances of survival for Mark Whitney seemed possible and he was hoping for bright days but things don&rsquo;t go on your path all the time. His pressurized camps experiences some error one day and it just implodes leaving Mark Whitney injured and homeless in a one man planet. But no matter what he sorts out this problem too and makes lot of compromises as the potatoes which he planet were destroyed. This incident changed the trajectory for Mark&rsquo;s survival and he was going all downhill. He didn&rsquo;t have enough resources so that he could grow food again, neither did he have enough supplies remaining. But his hope comes alive when he finally sorts out the previously destroyed communicator and he could send and receive text messages to and from earth. But in earth the mission launch which was supposed to save Mark Whitney failed miserably. But by this time the rocket which left Mars after isolating mark alone in Mars had reached back to earth and the astronauts on board were unaware that their friend was still alive. Hence when the mission control tells them the news, they get very mad upon themselves and hence decide to take the sole responsibility of rescuing Mark. After this they ignore the commands from mission control and decide to thrust back to Mars. Hence with the help of Earth&rsquo;s gravity they set on a journey back to Mars.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Here Mark Whitney, starts to prepare to somehow reach the space shuttle which would get in the orbit of Mars but not land on the planet. He had no idea how he would do it. But finally he realizes the resources needed for next marks mission had already landed on the planet so he reaches that place with struggle where his mars rover also dies. Finally, when the space shuttle reaches the orbit, mark thrusts himself into sky with explosive behind his rocket to escape the obit of Mars. But mathematically rocket in which Mark Whitney was present would not make as close to the space shuttle as it should make. But the brave captain of the mission bravely jumps off the space shuttle to get hold of Mark and the rescue mission succeeds.&nbsp;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">This movie did incredibly good in cinemas but the best part is the scientific message it has tried to show. This movie has showed us wide range possibilities of space exploration and showed the general public what they should expect from the mission to mars and what are the risks involved in this heavily invested mission.</span></span></span></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">BY: Siddhartha Ghimire</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">+2 &ldquo;Science&rdquo;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">&nbsp;&nbsp;</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '3304ac598855b281cc31e62573b616a15f81c33358766.jpg', 'This 2015, movie by Ridley Scott does a really great job in putting your mind out of your comfort zone. This visionary movie not only embarks the experience of a man stranded on this remote planet but also gives people a wide range of practical ideas abou', 'martian book review matt deamon ', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '2020/10/10', 'On', '3304ac598855b281cc31e62573b616a15f81c3335857e', 49, 25),
(15, 'के हो जीवनको उद्देश्य?', 'Technology', '<p>हामी सबैका अनेकौं इच्छा हुन्छन् । कसैलाई सफल हुने इच्छा, त्यसलाई पूरा गर्ने इच्छा र जीवनलाई सार्थक बनाउने इच्छा हुन्छ &nbsp;। उद्देश्यले लगनशील गराउँछ । प्रत्येक दिन तपाई आफैसँग यस्तो प्रश्न गर्नुहोस् &mdash; &nbsp;के म आफ्नो जीवनको उद्देश्यको नजिक पुगेको छु? के मैले संसारलाई बस्नको निमित्त योग्य र उत्तम ठाउँ बनाउन सक्छु वा बनाइरहेको छु ? यसको उत्तर छैन भन्ने आयो भने तपाईँले आफ्नो जीवन बर्बाद गर्नुभयो । किनभने जीवन हामीलाई त्यही हिसाबबाट दिइएको छ जस्तो हिसाब हामीले उसलाई दिएका छौँ । हामीले जीवनमा आफ्नो उद्देश्य जति चाँडै खोज्छौँ त्यति नै राम्रो हुन्छ । जब हामी यो खोज्न सफल हुन्छौं तब व्यक्तिगत फाइदा र सामाजिक जिम्मेदारीहरूबीचको संघर्षमा एउटा नैतिक सन्तुलन आउँछ । यसो गर्दा हामी जागरुक, अझै सक्रिय भई आफ्नो उद्देश्यतर्फ दीर्घकालीन हित हुनेगरी सही निर्णय लिन थाल्छौँ ।.</p>\r\n\r\n<p>हामी सबैजना यस धर्तीमा एउटा उद्देश्य लिई आएका छौँ । अर्थात, प्रकृतिले हामीलाई त्यसैगरी पठाएको छ । तर, हामीमध्ये थोरैले मात्र जीवनमा आफ्नो लक्ष्यको पहिचान &nbsp;गर्छन् । &nbsp;धेरै त बाँच्नेमात्र हुन् । तिनले समयलाई बेवास्ता &nbsp;गर्दै आफ्ना दिन गन्छन् । कसैले भनेका छन् &mdash; जीवनको बाटोमा हेर्ने क्रममा आफ्नो आँखा लक्ष्यमा केन्द्रित गर्नुहोस् &nbsp;। आँपमाथि ध्यान दिनुहोस् कोयामा होइन । हामीमा उद्देश्य हासिल गर्न सही दिशा, दृढनिश्चय, समयको सीमा, त्यसप्रति &nbsp;समर्पण र अनुशासन भएमात्रै हासिल गर्न सक्छौँ । वासिङटन &nbsp; इरविङले पनि भनेका छन् &mdash; महान् मानिसहरुको मस्तिष्क उद्देश्यले भरिएको हुन्छ भने अरु मानिसहरूसँग मात्र इच्छा हुन्छ &nbsp;। झमककुमारी घिमिरेले आफू अशक्त भए पनि पढ्ने उद्देश्य लिई आज धेरै साहित्य रचना गरेर हामीबीच प्रेरणाको पात्र बनेकी छिन् ।</p>\r\n\r\n<p>हामीले जिन्दगीमा आफ्ना उद्देश्य प्राप्त गर्दा निकै चुनौतीको सामना गर्छौं । त्यस्ता चुनौतीलाई अवसरको रुपमा स्वीकारी अघि बढ्यौँ भने उद्देश्य हासिल हुन्छ । लायड जोन्सले भनेका छन् &mdash; केही गर्ने प्रयत्न गरेर असफल हुने मानिसहरु ती मानिसहरु भन्दा लाखौं गुना राम्रा हुन्छन् जो केही पनि नगरीकन सफल हुन्छन् ।&nbsp;<br />\r\nलक्ष्यलाई सानो सानो भागमा बाँड्न सके हासिल गर्न सजिलो हुन्छ । हामी जुनसुकै उमेरको भए पनि उद्देश्य प्राप्त गर्ने अठोट भए त्यो पक्कै पनि पूरा हुन्छ । जिन गार्डोनले पनि भनेका छन् &mdash; जीवनमा लामो पाइला बढाउन मुस्किल होला तर एक एक इन्च गरी बढाउन त सजिलो हुन्छ । सबैभन्दा पहिले उद्देश्य हासिल गर्न चाहिने वस्तु हामी स्वयं नै हौँ । हाम्रो उद्देश्य हासिल गर्ने गन्तव्यको यात्रु हामी नै हौँ । त्यसकारण निरन्तर प्रयास र असफल हुँदा गल्तीहरुबाट सिकी कहिल्यै हरेस नखाए हामी सबैले &nbsp;आफ्ना उद्देश्य प्राप्त गर्नेछौँ ।<br />\r\n&nbsp;</p>\r\n', '8e9241a6b75e61f2cbe635a1d839646b5f81d3e5e811a.jpg', '', '', '6bb5415faea62244a6d981d5e97be6555f81d2b71336d', '2020/10/10', 'Delete', '8e9241a6b75e61f2cbe635a1d839646b5f81d3e5e7fd6', 17, 8),
(16, ' देशभक्त युवा नेपाल', 'Philosophy', '<p><span style=\"font-size:16px\">&quot;युवाहरू कुनै पनि राष्ट्रको मेरुदण्ड हुन्। यदि तपाईं समाज र राष्ट्रको भलाइका लागि काम गर्न इच्छुक हुनुहुन्छ भने यो तपाईंको लागि उत्तम प्लेटफर्म हुनेछ। म सबै ऊर्जावान युवाहरुलाई यस संगठनमा सम्मिलित हुन अनुरोध गर्दछु। यो संगठनले कुनै राजनीतिक गतिविधिलाई बढावा दिदैन। हामी सबै रचनात्मक दिमागलाई स्वागत गर्दछौं, उनीहरूको विचार साझा गर्न, कार्य गर्न, र सबै युवाहरूलाई उनीहरूको व्यक्तित्व र राष्ट्र विकासको लाSगि विकास कार्य गर्न मार्गदर्शन गर्न। कुनै संकोच र डर बिना, तपाईं हाम्रो संगठनमा सँधै स्वागत छ।&quot;देशभक्त युवा नेपालमा सामेल भएर प्रदेश ३ का सबै युवाहरुलाई समाज र राष्ट्रको हितका लागि काम गर्न अनुरोध गर्दछु।&quot;यदि युवा आज उठ्दैनन् भने हाम्रो देशको छिटो विकास कहिले हुनेछ।&quot;आज सम्मिलित हुनुहोस् र सामाजिक कार्यको लागि तपाईंको यात्रा सुरू गर्नुहोस्।</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:24px\"><strong>&quot;यदि तपाइँ इच्छुक हुनुहुन्छ भने फारम भर्नको लागि लिंक प्रतिलिपि गर्नुहोस्।&quot;</strong></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><u>https://docs.google.com/forms/d/e/1FAIpQLScKT2tVmHEUSABWSMTgYpJQSF8tjSCS_pUJwwVEfefUyiTstQ/viewform?usp=sf_link</u></span></p>\r\n', '1bd18a1045a5ce32826ed1ff13f573135f81d92615a0c.jpg', '', '', '6bb5415faea62244a6d981d5e97be6555f81d2b71336d', '2020/10/10', 'On', '1bd18a1045a5ce32826ed1ff13f573135f81d926157c2', 24, 7),
(17, 'Difference between Upper motor neuron lesion vs lower motor neuron lesion', 'Medicine', '<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">Difference between Upper motor neuron lesion vs lower motor neuron lesion</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; font-family:&quot;Times New Roman&quot;; text-decoration-color:initial; text-decoration-style:initial\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">&nbsp;</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>UMN</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>LMN</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>Bulk</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Normal till disuse atrophy</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Prominent weakness and atrophy occurs early</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>Tone</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Increased</div>\r\n\r\n			<div style=\"text-align:justify\">Except in spinal shock where tone will be flaccid and recovers in around 2 weeks</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Always HYPOTONIA</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>Power</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Reduced, tends towards normal over period of time if adequate stimulation maintained</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Severely decreased</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>Abnormal movement</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Fasciculation are not usually seen</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Fasciculation is due to degenerative process in anterior horn cell</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>Reflexes</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Brisk</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Decreased to absent</div>\r\n\r\n			<div style=\"text-align:justify\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\"><strong>Plantar/ Babiknsi</strong></div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Up going</div>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:208px\">\r\n			<div style=\"text-align:justify\">Downgoing</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\"><strong><u>&gt;&gt;<em><a href=\"https://www.blogger.com/blog/post/edit/7901364765394296485/8843063072784835391#\">Learn about the plantar reflexes and its variants with video demonstration</a></em></u></strong></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The most important thing to know is the intactness of the muscle stretch reflex. The tone is maintained under the influence of gamma motor neuron by the alpha motor neuron and the bulk and power is the pure function alpha motor neuron. The reflex is complete if its loop is complete.</span></span></span></div>\r\n\r\n<table align=\"center\" class=\"tr-caption-container\" style=\"font-family:&quot;Times New Roman&quot;; text-align:center; text-decoration-color:initial; text-decoration-style:initial\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><a href=\"https://www.blogger.com/blog/post/edit/7901364765394296485/8843063072784835391#\"><img alt=\"alpha motor neuron , gamma motor neuron, corticospinal tract muscle spindle, extrafusal, intrafusal muscle fibre\" src=\"https://4.bp.blogspot.com/-sFOgvJZXRwc/WawCVikEcKI/AAAAAAAAI80/vPqLNnjzfwA_Um4uEAIBCveKnDhR1jRtwCLcBGAs/s640/Muscle%2Bstretch%2Breflex.jpeg\" style=\"cursor:move; height:343px; width:640px\" title=\"Muscle reflex arc\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Muscle Reflex arc</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\"><strong><u><em><a href=\"https://www.blogger.com/blog/post/edit/7901364765394296485/8843063072784835391#\">Learn the analogy of muscle and bladder on UMN and LMN lesions.</a></em></u></strong></span></span></span><br />\r\n&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">Upper Motor Neuron lesions are the lesion occurring anywhere in the central nervous system from the brain upto the spinal cord before the alpha motor neurons arise from the spinal cord. The lesion could arise from the cerebral cortex, internal capsule, midbrain, pons, medulla and the cortico spinal tract in the spinal cord. The lesions can be anything from vascular, traumatic, degenerative, and inflammatory to infective.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The lesions occurring after the alpha motor neuron accounts for the lower motor neuron lesions. The lesions could arise in the nucleus of alpha motor neuron (Polio myelitis, Amylotrophic lateral Sclerosis, brown sequard syndrome), Lesions in the nerve (Traumatic resection, entrapement, neuritis), Lesion in the NMJ (Myasthenia gravis, Lambert Eaton Syndrome) and the muscle (Duchenne Muscular Dystrophy, Beckers Muscular Dystrophy )itself.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The two principle that determine the features of upper motor and lower motor neuron include the completeness of muscle reflex arc and the higher motor control over it.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The motor reflex arc consists of the Ia fibres carrying the signal from muscle spindle which prevents the excessive stretch of muscle by contracting it. The afferent fibres mono synaptically fires the alpha motor neurons at the anterior horn and causes the muscle contraction. This reflexes is controlled further by higher centre and is thus there is an inhibitory mediatory released via an intermediate neuron coming from the corticospinal tract. If this closed loop of nerve are intact the muscle tendon reflex is intact and so is the deep tendon reflex which is elicited using reflex hammer.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><br />\r\n<span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\"><u><strong><em><a href=\"https://www.blogger.com/blog/post/edit/7901364765394296485/8843063072784835391#\">Learn about the effect of UMN and LMN lesion on bladder</a>.</em></strong></u></span></span></span><br />\r\n&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The tone is the inherent state of contraction of muscles to maintain the posture of the body. It is in medicated by the Gamma motor neuron coming together wit alpha motor neuron and innervates the intrafusal fibres of muscle spindle and thus increases the sensitivity of change in length of the muscle. It is also directly innervated from the corticospinal tract and thus is affected in response to UMN lesion.&nbsp; Along with that the gamma motor neurons are spontaneously firing and thus influence the sensitivity of alpha motor neurons and thus affect the tone.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">In lower motor neuron lesion, the alpha motor neuron and distal is injured. So the loop can not be complete and hence no reflex contraction of muscle in response to stretch of muscle spindle receptor. In upper motor neuron lesion, the higher inhibition over the reflex arc is lost. This causes the excessive firing from alpha motor neuron and hence exaggerated deep tendon reflex.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The lower motor neurone lesion will develop flaccid paralysis because there is no innervation to muscle fibre to cause its contraction and hence they easily go into disuse atrophy early and the bulk is reduced. Contrary to the Upper motor neuron lesion where the higher control of the muscle is lost but still the muscle can be contracted locally. So, constant use of muscle via passive movement can preserve the bulk of the muscle.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">The tone in upper motor neuron lesion is exaggerated because the supraspinous modulation over the gamma motor neuron is lost and they are firing spontaneously.&nbsp; This increases the tone of the muscle with increases sensitivity of muscle spindle to passive stretch and increased firing in the Ia fibres. This increased firing induces increased firing in alpha motor neuron and increased contraction.The tone is higher in the antigravity muscle and hence clasp knife rigidity is due to the greater bulk of the antigravity muscles and hence the paralysis is spastic type in upper motor neuron lesion.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">However, in the lower motor neuron lesion , again the same nerve that complete the muscle reflex is incomplete and hence the normal tone is present due to absence of innervation in the muscle to bring about the contraction and hence the tone is flaccid and hence the paralysis flaccid paralysis.</span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Times New Roman&quot;\">In LMN lesion, the muscle become hypersensitive to neurotransmitter as it is denervated. Similarly the damaged lower motor erratically discharges the neurotransmitter stored within itself as the neuron degrades. So, both increased hypersensitivity and erratic release of neurotransmitter causes fasciculations. However, in UMN lesion, there is regular firing to prevent the atrophy of muscles.<br />\r\n<br />\r\n<u><em><strong><a href=\"https://www.blogger.com/blog/post/edit/7901364765394296485/8843063072784835391#\">Learn about Cranial nerve examinations&nbsp;</a></strong></em></u></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<table align=\"center\" class=\"tr-caption-container\" style=\"font-family:&quot;Times New Roman&quot;; text-align:center; text-decoration-color:initial; text-decoration-style:initial\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><a href=\"https://www.blogger.com/blog/post/edit/7901364765394296485/8843063072784835391#\"><img alt=\"Upper Motor neuron , Lower motor neuron, differnence\" src=\"https://1.bp.blogspot.com/-R6HhDzyDQBk/WawDdRE7n2I/AAAAAAAAI9A/F-wzumtMigAKR3Hez9J58F4vb-xKX_vFACLcBGAs/s400/UMN%2Bvs%2BLMN.PNG\" style=\"cursor:move; height:203px; width:400px\" title=\"UMN vs LMN lesion\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Difference between UMN and &nbsp;LMN lesion in tabulated form.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'b6998b681427cffaa7f53e4d8ea0e0195f81da5265812.jpg', 'Difference between Upper motor neuron lesion vs lower motor neuron lesion', 'Neurology, Physiology, UMN, LMN, difference, motor', 'a969d91335518c7c462f6c7b3f2a66095f81d3e9ab8f1', '2020/10/10', 'On', 'b6998b681427cffaa7f53e4d8ea0e0195f81da5265653', 81, 60);

-- --------------------------------------------------------

--
-- Table structure for table `blog_visitors`
--

DROP TABLE IF EXISTS `blog_visitors`;
CREATE TABLE `blog_visitors` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `createdDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_visitors`
--

INSERT INTO `blog_visitors` (`id`, `page`, `ip`, `createdDate`) VALUES
(10, '', '202.51.76.91', '2020/10/10'),
(11, '14', '202.51.76.91', '2020/10/10'),
(12, '14', '66.249.90.234', '2020/10/10'),
(13, '14', '132.145.64.33', '2020/10/10'),
(14, '15', '103.10.28.59', '2020/10/10'),
(15, '15', '202.51.76.78', '2020/10/10'),
(16, '14', '103.10.28.59', '2020/10/10'),
(17, '15', '202.51.76.91', '2020/10/10'),
(18, '15', '66.249.90.159', '2020/10/10'),
(19, '15', '140.238.95.199', '2020/10/10'),
(20, '14', '154.30.132.36', '2020/10/10'),
(21, '15', '181.214.173.214', '2020/10/10'),
(22, '15', '66.249.90.232', '2020/10/10'),
(23, '16', '103.10.28.59', '2020/10/10'),
(24, '16', '66.249.90.234', '2020/10/10'),
(25, 'देशभक्त युवा नेपाल', '103.10.28.59', '2020/10/10'),
(26, '17', '202.51.76.78', '2020/10/10'),
(27, '17', '66.249.90.128', '2020/10/10'),
(28, '17', '103.10.28.59', '2020/10/10'),
(29, '17', '66.249.90.232', '2020/10/10'),
(30, '17', '66.249.90.236', '2020/10/10'),
(31, '16', '202.51.76.91', '2020/10/10'),
(32, '17', '66.231.185.74', '2020/10/10'),
(33, '17', '154.16.122.179', '2020/10/10'),
(34, '17', '120.89.103.56', '2020/10/10'),
(35, '17', '202.51.76.91', '2020/10/10'),
(36, '17', '132.145.66.156', '2020/10/10'),
(37, '16', '140.238.83.181', '2020/10/10'),
(38, '17', '52.6.243.18', '2020/10/10'),
(39, '15', '38.143.100.16', '2020/10/10'),
(40, '17', '66.220.149.6', '2020/10/11'),
(41, '17', '66.220.149.36', '2020/10/11'),
(42, '17', '66.220.149.4', '2020/10/11'),
(43, '17', '173.252.83.120', '2020/10/11'),
(44, '17', '173.252.83.22', '2020/10/11'),
(45, '17', '66.220.149.24', '2020/10/11'),
(46, '17', '66.220.149.19', '2020/10/11'),
(47, '17', '66.220.149.31', '2020/10/11'),
(48, '17', '66.220.149.5', '2020/10/11'),
(49, '17', '66.249.87.139', '2020/10/11'),
(50, '17', '173.252.83.9', '2020/10/11'),
(51, '17', '132.145.64.33', '2020/10/11'),
(52, '17', '66.220.149.12', '2020/10/11'),
(53, '17', '66.220.149.22', '2020/10/11'),
(54, '17', '66.220.149.112', '2020/10/11'),
(55, '17', '66.220.149.11', '2020/10/11'),
(56, '14', '66.220.149.2', '2020/10/11'),
(57, '14', '66.220.149.24', '2020/10/11'),
(58, '14', '173.252.87.7', '2020/10/11'),
(59, '14', '31.13.115.5', '2020/10/11'),
(60, '17', '66.220.149.1', '2020/10/11'),
(61, '14', '132.145.14.70', '2020/10/11'),
(62, '17', '173.252.107.29', '2020/10/11'),
(63, '14', '173.252.79.20', '2020/10/11'),
(64, '14', '173.252.83.113', '2020/10/11'),
(65, '14', '173.252.83.117', '2020/10/11'),
(66, '17', '173.252.87.6', '2020/10/11'),
(67, '16', '110.44.121.52', '2020/10/11'),
(68, '17', '66.220.149.29', '2020/10/11'),
(69, '17', '66.220.149.28', '2020/10/11'),
(70, '17', '110.44.125.9', '2020/10/11'),
(71, '17', '27.34.68.57', '2020/10/11'),
(72, '14', '27.34.68.57', '2020/10/11'),
(73, '17', '27.34.115.162', '2020/10/11'),
(74, '17', '27.34.20.251', '2020/10/11'),
(75, '16', '27.34.20.251', '2020/10/11'),
(76, '14', '27.34.20.251', '2020/10/11'),
(77, '16', '165.232.58.23', '2020/10/11'),
(78, '14', '165.232.58.23', '2020/10/11'),
(79, '17', '165.232.58.23', '2020/10/11'),
(80, '17', '173.252.79.7', '2020/10/11'),
(81, '17', '173.252.83.113', '2020/10/11'),
(82, '17', '173.252.107.18', '2020/10/11'),
(83, '17', '27.34.30.179', '2020/10/11'),
(84, '17', '132.145.9.5', '2020/10/11'),
(85, '17', '202.51.76.72', '2020/10/11'),
(86, '14', '66.220.149.13', '2020/10/11'),
(87, '14', '66.220.149.25', '2020/10/11'),
(88, '14', '66.220.149.9', '2020/10/11'),
(89, '', '35.238.252.69', '2020/10/11'),
(90, '14', '199.166.0.131', '2020/10/11'),
(91, '17', '199.166.0.155', '2020/10/11'),
(92, '17', '173.252.95.13', '2020/10/12'),
(93, '17', '173.252.95.119', '2020/10/12'),
(94, '17', '66.220.149.27', '2020/10/12'),
(95, '17', '66.220.149.3', '2020/10/12'),
(96, '14', '173.252.87.28', '2020/10/12'),
(97, '14', '173.252.87.24', '2020/10/12'),
(98, '14', '173.252.87.111', '2020/10/12'),
(99, '17', '173.252.95.2', '2020/10/12'),
(100, '17', '173.252.95.117', '2020/10/12'),
(101, '17', '173.252.95.20', '2020/10/12'),
(102, '17', '173.252.95.6', '2020/10/12'),
(103, '17', '173.252.95.23', '2020/10/12'),
(104, '17', '142.93.13.146', '2020/10/12'),
(105, '17', '173.252.127.20', '2020/10/12'),
(106, '17', '69.171.251.6', '2020/10/12'),
(107, '17', '66.249.65.193', '2020/10/12'),
(108, '17', '173.252.111.8', '2020/10/12'),
(109, '17', '158.85.227.93', '2020/10/12'),
(110, '14', '114.119.133.152', '2020/10/12'),
(111, '14', '110.44.127.199', '2020/10/12'),
(112, '17', '173.252.107.17', '2020/10/12');

-- --------------------------------------------------------

--
-- Table structure for table `employer_message`
--

DROP TABLE IF EXISTS `employer_message`;
CREATE TABLE `employer_message` (
  `id` int(11) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `sentBy` varchar(255) NOT NULL,
  `sentTo` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `createdTime` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_message`
--

INSERT INTO `employer_message` (`id`, `transactionId`, `sentBy`, `sentTo`, `message`, `createdTime`, `createdDate`) VALUES
(50, '13e8387e1c7651e5724e5ca581f3c5ff5f5a28fe057ae', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'hi', '06:02:52', '14/Sep/2020/Mon'),
(51, '13e8387e1c7651e5724e5ca581f3c5ff5f5a28fe057ae', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'test1', '06:04:37', '14/Sep/2020/Mon'),
(52, 'df09488ce74caaac03f52416b0c38d995f5f95474deb0', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'jhiii', '04:07:57', '14/Sep/2020/Mon'),
(53, 'df09488ce74caaac03f52416b0c38d995f5f95474deb0', 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d', 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d', 'hajur', '04:08:26', '14/Sep/2020/Mon'),
(54, '13e8387e1c7651e5724e5ca581f3c5ff5f5a28fe057ae', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'hi', '04:25:47', '14/Sep/2020/Mon');

-- --------------------------------------------------------

--
-- Table structure for table `estate_message`
--

DROP TABLE IF EXISTS `estate_message`;
CREATE TABLE `estate_message` (
  `id` int(11) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `sentBy` varchar(255) NOT NULL,
  `sentTo` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `createdTime` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_message`
--

DROP TABLE IF EXISTS `service_message`;
CREATE TABLE `service_message` (
  `id` int(11) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `sentBy` varchar(255) NOT NULL,
  `sentTo` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `createdTime` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_message`
--

INSERT INTO `service_message` (`id`, `transactionId`, `sentBy`, `sentTo`, `message`, `createdTime`, `createdDate`) VALUES
(50, '6ee1bc13d90109bf4daf07346257a0f25f61e726d2eaf', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', 'hi', '08:26:03', '18/Sep/2020/Fri'),
(51, 'a9e6ca83ffc983b8f72ec9310c641d6b5f644b573c00d', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', 'hi', '10:39:12', '18/Sep/2020/Fri'),
(52, 'a9e6ca83ffc983b8f72ec9310c641d6b5f644b573c00d', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', 'kxa', '10:43:31', '18/Sep/2020/Fri'),
(53, '6ee1bc13d90109bf4daf07346257a0f25f61e726d2eaf', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', 'k xa', '10:47:34', '18/Sep/2020/Fri'),
(54, 'b3b2766d868be5dc4d1a00d719767b4e5f64cdd9a71e9', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '', 'Hello', '11:17:18', '27/Sep/2020/Sun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_visitors`
--
ALTER TABLE `blog_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_message`
--
ALTER TABLE `employer_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estate_message`
--
ALTER TABLE `estate_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_message`
--
ALTER TABLE `service_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog_visitors`
--
ALTER TABLE `blog_visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `employer_message`
--
ALTER TABLE `employer_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `estate_message`
--
ALTER TABLE `estate_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_message`
--
ALTER TABLE `service_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
