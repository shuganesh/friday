
-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(19) DEFAULT NULL,
  `country` varchar(44) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `country`, `created_on`) VALUES
(2, 'AD', 'Andorra', '2020-04-09 02:11:28'),
(3, 'AE', 'United Arab Emirates', '2020-04-09 02:11:28'),
(4, 'AF', 'Afghanistan', '2020-04-09 02:11:28'),
(5, 'AG', 'Antigua and Barbuda', '2020-04-09 02:11:28'),
(6, 'AI', 'Anguilla', '2020-04-09 02:11:28'),
(7, 'AL', 'Albania', '2020-04-09 02:11:28'),
(8, 'AM', 'Armenia', '2020-04-09 02:11:28'),
(9, 'AO', 'Angola', '2020-04-09 02:11:28'),
(10, 'AQ', 'Antarctica', '2020-04-09 02:11:28'),
(11, 'AR', 'Argentina', '2020-04-09 02:11:28'),
(12, 'AS', 'American Samoa', '2020-04-09 02:11:28'),
(13, 'AT', 'Austria', '2020-04-09 02:11:28'),
(14, 'AU', 'Australia', '2020-04-09 02:11:28'),
(15, 'AW', 'Aruba', '2020-04-09 02:11:28'),
(16, 'AX', 'Aland Islands', '2020-04-09 02:11:28'),
(17, 'AZ', 'Azerbaijan', '2020-04-09 02:11:28'),
(18, 'BA', 'Bosnia and Herzegovina', '2020-04-09 02:11:28'),
(19, 'BB', 'Barbados', '2020-04-09 02:11:28'),
(20, 'BD', 'Bangladesh', '2020-04-09 02:11:28'),
(21, 'BE', 'Belgium', '2020-04-09 02:11:28'),
(22, 'BF', 'Burkina Faso', '2020-04-09 02:11:28'),
(23, 'BG', 'Bulgaria', '2020-04-09 02:11:28'),
(24, 'BH', 'Bahrain', '2020-04-09 02:11:28'),
(25, 'BI', 'Burundi', '2020-04-09 02:11:28'),
(26, 'BJ', 'Benin', '2020-04-09 02:11:28'),
(27, 'BL', 'Saint Barthelemy', '2020-04-09 02:11:28'),
(28, 'BM', 'Bermuda', '2020-04-09 02:11:28'),
(29, 'BN', 'Brunei Darussalam', '2020-04-09 02:11:28'),
(30, 'BO', 'Bolivia, Plurinational State of', '2020-04-09 02:11:28'),
(31, 'BQ', 'Bonaire, Sint Eustatius and Saba', '2020-04-09 02:11:28'),
(32, 'BR', 'Brazil', '2020-04-09 02:11:28'),
(33, 'BS', 'Bahamas', '2020-04-09 02:11:28'),
(34, 'BT', 'Bhutan', '2020-04-09 02:11:28'),
(35, 'BV', 'Bouvet Island', '2020-04-09 02:11:28'),
(36, 'BW', 'Botswana', '2020-04-09 02:11:28'),
(37, 'BY', 'Belarus', '2020-04-09 02:11:28'),
(38, 'BZ', 'Belize', '2020-04-09 02:11:28'),
(39, 'CA', 'Canada', '2020-04-09 02:11:28'),
(40, 'CC', 'Cocos (Keeling) Islands', '2020-04-09 02:11:28'),
(41, 'CD', 'Congo, The Democratic Republic of The', '2020-04-09 02:11:28'),
(42, 'CF', 'Central African Republic', '2020-04-09 02:11:28'),
(43, 'CG', 'Congo', '2020-04-09 02:11:28'),
(44, 'CH', 'Switzerland', '2020-04-09 02:11:28'),
(45, 'CI', 'Cote D\'ivoire', '2020-04-09 02:11:28'),
(46, 'CK', 'Cook Islands', '2020-04-09 02:11:28'),
(47, 'CL', 'Chile', '2020-04-09 02:11:28'),
(48, 'CM', 'Cameroon', '2020-04-09 02:11:28'),
(49, 'CN', 'China', '2020-04-09 02:11:28'),
(50, 'CO', 'Colombia', '2020-04-09 02:11:28'),
(51, 'CR', 'Costa Rica', '2020-04-09 02:11:28'),
(52, 'CU', 'Cuba', '2020-04-09 02:11:28'),
(53, 'CV', 'Cabo Verde', '2020-04-09 02:11:28'),
(54, 'CW', 'Curacao', '2020-04-09 02:11:28'),
(55, 'CX', 'Christmas Island', '2020-04-09 02:11:28'),
(56, 'CY', 'Cyprus', '2020-04-09 02:11:28'),
(57, 'CZ', 'Czech Republic', '2020-04-09 02:11:28'),
(58, 'DE', 'Germany', '2020-04-09 02:11:28'),
(59, 'DJ', 'Djibouti', '2020-04-09 02:11:28'),
(60, 'DK', 'Denmark', '2020-04-09 02:11:28'),
(61, 'DM', 'Dominica', '2020-04-09 02:11:28'),
(62, 'DO', 'Dominican Republic', '2020-04-09 02:11:28'),
(63, 'DZ', 'Algeria', '2020-04-09 02:11:28'),
(64, 'EC', 'Ecuador', '2020-04-09 02:11:28'),
(65, 'EE', 'Estonia', '2020-04-09 02:11:28'),
(66, 'EG', 'Egypt', '2020-04-09 02:11:28'),
(67, 'EH', 'Western Sahara', '2020-04-09 02:11:28'),
(68, 'ER', 'Eritrea', '2020-04-09 02:11:28'),
(69, 'ES', 'Spain', '2020-04-09 02:11:28'),
(70, 'ET', 'Ethiopia', '2020-04-09 02:11:28'),
(71, 'FI', 'Finland', '2020-04-09 02:11:28'),
(72, 'FJ', 'Fiji', '2020-04-09 02:11:28'),
(73, 'FK', 'Falkland Islands (Malvinas)', '2020-04-09 02:11:28'),
(74, 'FM', 'Micronesia, Federated States of', '2020-04-09 02:11:28'),
(75, 'FO', 'Faroe Islands', '2020-04-09 02:11:28'),
(76, 'FR', 'France', '2020-04-09 02:11:28'),
(77, 'GA', 'Gabon', '2020-04-09 02:11:28'),
(78, 'GB', 'United Kingdom', '2020-04-09 02:11:28'),
(79, 'GD', 'Grenada', '2020-04-09 02:11:28'),
(80, 'GE', 'Georgia', '2020-04-09 02:11:28'),
(81, 'GF', 'French Guiana', '2020-04-09 02:11:28'),
(82, 'GG', 'Guernsey', '2020-04-09 02:11:28'),
(83, 'GH', 'Ghana', '2020-04-09 02:11:28'),
(84, 'GI', 'Gibraltar', '2020-04-09 02:11:28'),
(85, 'GL', 'Greenland', '2020-04-09 02:11:28'),
(86, 'GM', 'Gambia', '2020-04-09 02:11:28'),
(87, 'GN', 'Guinea', '2020-04-09 02:11:28'),
(88, 'GP', 'Guadeloupe', '2020-04-09 02:11:28'),
(89, 'GQ', 'Equatorial Guinea', '2020-04-09 02:11:28'),
(90, 'GR', 'Greece', '2020-04-09 02:11:28'),
(91, 'GS', 'South Georgia and The South Sandwich Islands', '2020-04-09 02:11:28'),
(92, 'GT', 'Guatemala', '2020-04-09 02:11:28'),
(93, 'GU', 'Guam', '2020-04-09 02:11:28'),
(94, 'GW', 'Guinea-Bissau', '2020-04-09 02:11:28'),
(95, 'GY', 'Guyana', '2020-04-09 02:11:28'),
(96, 'HK', 'Hong Kong', '2020-04-09 02:11:28'),
(97, 'HM', 'Heard Island and Mcdonald Islands', '2020-04-09 02:11:28'),
(98, 'HN', 'Honduras', '2020-04-09 02:11:28'),
(99, 'HR', 'Croatia', '2020-04-09 02:11:28'),
(100, 'HT', 'Haiti', '2020-04-09 02:11:28'),
(101, 'HU', 'Hungary', '2020-04-09 02:11:28'),
(102, 'ID', 'Indonesia', '2020-04-09 02:11:28'),
(103, 'IE', 'Ireland', '2020-04-09 02:11:28'),
(104, 'IL', 'Israel', '2020-04-09 02:11:28'),
(105, 'IM', 'Isle of Man', '2020-04-09 02:11:28'),
(106, 'IN', 'India', '2020-04-09 02:11:28'),
(107, 'IO', 'British Indian Ocean Territory', '2020-04-09 02:11:28'),
(108, 'IQ', 'Iraq', '2020-04-09 02:11:28'),
(109, 'IR', 'Iran, Islamic Republic of', '2020-04-09 02:11:28'),
(110, 'IS', 'Iceland', '2020-04-09 02:11:28'),
(111, 'IT', 'Italy', '2020-04-09 02:11:28'),
(112, 'JE', 'Jersey', '2020-04-09 02:11:28'),
(113, 'JM', 'Jamaica', '2020-04-09 02:11:28'),
(114, 'JO', 'Jordan', '2020-04-09 02:11:28'),
(115, 'JP', 'Japan', '2020-04-09 02:11:28'),
(116, 'KE', 'Kenya', '2020-04-09 02:11:28'),
(117, 'KG', 'Kyrgyzstan', '2020-04-09 02:11:28'),
(118, 'KH', 'Cambodia', '2020-04-09 02:11:28'),
(119, 'KI', 'Kiribati', '2020-04-09 02:11:28'),
(120, 'KM', 'Comoros', '2020-04-09 02:11:28'),
(121, 'KN', 'Saint Kitts and Nevis', '2020-04-09 02:11:28'),
(122, 'KP', 'Korea, Democratic People\'s Republic of', '2020-04-09 02:11:28'),
(123, 'KR', 'Korea, Republic of', '2020-04-09 02:11:28'),
(124, 'KW', 'Kuwait', '2020-04-09 02:11:28'),
(125, 'KY', 'Cayman Islands', '2020-04-09 02:11:28'),
(126, 'KZ', 'Kazakhstan', '2020-04-09 02:11:28'),
(127, 'LA', 'Lao People\'s Democratic Republic', '2020-04-09 02:11:28'),
(128, 'LB', 'Lebanon', '2020-04-09 02:11:28'),
(129, 'LC', 'Saint Lucia', '2020-04-09 02:11:28'),
(130, 'LI', 'Liechtenstein', '2020-04-09 02:11:28'),
(131, 'LK', 'Sri Lanka', '2020-04-09 02:11:28'),
(132, 'LR', 'Liberia', '2020-04-09 02:11:28'),
(133, 'LS', 'Lesotho', '2020-04-09 02:11:28'),
(134, 'LT', 'Lithuania', '2020-04-09 02:11:28'),
(135, 'LU', 'Luxembourg', '2020-04-09 02:11:28'),
(136, 'LV', 'Latvia', '2020-04-09 02:11:28'),
(137, 'LY', 'Libya', '2020-04-09 02:11:28'),
(138, 'MA', 'Morocco', '2020-04-09 02:11:28'),
(139, 'MC', 'Monaco', '2020-04-09 02:11:28'),
(140, 'MD', 'Moldova, Republic of', '2020-04-09 02:11:28'),
(141, 'ME', 'Montenegro', '2020-04-09 02:11:28'),
(142, 'MF', 'Saint Martin (French Part)', '2020-04-09 02:11:28'),
(143, 'MG', 'Madagascar', '2020-04-09 02:11:28'),
(144, 'MH', 'Marshall Islands', '2020-04-09 02:11:28'),
(145, 'MK', 'North Macedonia', '2020-04-09 02:11:28'),
(146, 'ML', 'Mali', '2020-04-09 02:11:28'),
(147, 'MM', 'Myanmar', '2020-04-09 02:11:28'),
(148, 'MN', 'Mongolia', '2020-04-09 02:11:28'),
(149, 'MO', 'Macao', '2020-04-09 02:11:28'),
(150, 'MP', 'Northern Mariana Islands', '2020-04-09 02:11:28'),
(151, 'MQ', 'Martinique', '2020-04-09 02:11:28'),
(152, 'MR', 'Mauritania', '2020-04-09 02:11:28'),
(153, 'MS', 'Montserrat', '2020-04-09 02:11:28'),
(154, 'MT', 'Malta', '2020-04-09 02:11:28'),
(155, 'MU', 'Mauritius', '2020-04-09 02:11:28'),
(156, 'MV', 'Maldives', '2020-04-09 02:11:28'),
(157, 'MW', 'Malawi', '2020-04-09 02:11:28'),
(158, 'MX', 'Mexico', '2020-04-09 02:11:28'),
(159, 'MY', 'Malaysia', '2020-04-09 02:11:28'),
(160, 'MZ', 'Mozambique', '2020-04-09 02:11:28'),
(161, 'NA', 'Namibia', '2020-04-09 02:11:28'),
(162, 'NC', 'New Caledonia', '2020-04-09 02:11:28'),
(163, 'NE', 'Niger', '2020-04-09 02:11:28'),
(164, 'NF', 'Norfolk Island', '2020-04-09 02:11:28'),
(165, 'NG', 'Nigeria', '2020-04-09 02:11:28'),
(166, 'NI', 'Nicaragua', '2020-04-09 02:11:28'),
(167, 'NL', 'Netherlands', '2020-04-09 02:11:28'),
(168, 'NO', 'Norway', '2020-04-09 02:11:28'),
(169, 'NP', 'Nepal', '2020-04-09 02:11:28'),
(170, 'NR', 'Nauru', '2020-04-09 02:11:28'),
(171, 'NU', 'Niue', '2020-04-09 02:11:28'),
(172, 'NZ', 'New Zealand', '2020-04-09 02:11:28'),
(173, 'OM', 'Oman', '2020-04-09 02:11:28'),
(174, 'PA', 'Panama', '2020-04-09 02:11:28'),
(175, 'PE', 'Peru', '2020-04-09 02:11:28'),
(176, 'PF', 'French Polynesia', '2020-04-09 02:11:28'),
(177, 'PG', 'Papua New Guinea', '2020-04-09 02:11:28'),
(178, 'PH', 'Philippines', '2020-04-09 02:11:28'),
(179, 'PK', 'Pakistan', '2020-04-09 02:11:28'),
(180, 'PL', 'Poland', '2020-04-09 02:11:28'),
(181, 'PM', 'Saint Pierre and Miquelon', '2020-04-09 02:11:28'),
(182, 'PN', 'Pitcairn', '2020-04-09 02:11:28'),
(183, 'PR', 'Puerto Rico', '2020-04-09 02:11:28'),
(184, 'PS', 'Palestine, State of', '2020-04-09 02:11:28'),
(185, 'PT', 'Portugal', '2020-04-09 02:11:28'),
(186, 'PW', 'Palau', '2020-04-09 02:11:28'),
(187, 'PY', 'Paraguay', '2020-04-09 02:11:28'),
(188, 'QA', 'Qatar', '2020-04-09 02:11:28'),
(189, 'RE', 'Reunion', '2020-04-09 02:11:28'),
(190, 'RO', 'Romania', '2020-04-09 02:11:28'),
(191, 'RS', 'Serbia', '2020-04-09 02:11:28'),
(192, 'RU', 'Russian Federation', '2020-04-09 02:11:28'),
(193, 'RW', 'Rwanda', '2020-04-09 02:11:28'),
(194, 'SA', 'Saudi Arabia', '2020-04-09 02:11:28'),
(195, 'SB', 'Solomon Islands', '2020-04-09 02:11:28'),
(196, 'SC', 'Seychelles', '2020-04-09 02:11:28'),
(197, 'SD', 'Sudan', '2020-04-09 02:11:28'),
(198, 'SE', 'Sweden', '2020-04-09 02:11:28'),
(199, 'SG', 'Singapore', '2020-04-09 02:11:28'),
(200, 'SH', 'Saint Helena, Ascension and Tristan Da Cunha', '2020-04-09 02:11:28'),
(201, 'SI', 'Slovenia', '2020-04-09 02:11:28'),
(202, 'SJ', 'Svalbard and Jan Mayen', '2020-04-09 02:11:28'),
(203, 'SK', 'Slovakia', '2020-04-09 02:11:28'),
(204, 'SL', 'Sierra Leone', '2020-04-09 02:11:28'),
(205, 'SM', 'San Marino', '2020-04-09 02:11:28'),
(206, 'SN', 'Senegal', '2020-04-09 02:11:28'),
(207, 'SO', 'Somalia', '2020-04-09 02:11:28'),
(208, 'SR', 'Suriname', '2020-04-09 02:11:28'),
(209, 'SS', 'South Sudan', '2020-04-09 02:11:28'),
(210, 'ST', 'Sao Tome and Principe', '2020-04-09 02:11:28'),
(211, 'SV', 'El Salvador', '2020-04-09 02:11:28'),
(212, 'SX', 'Sint Maarten (Dutch Part)', '2020-04-09 02:11:28'),
(213, 'SY', 'Syrian Arab Republic', '2020-04-09 02:11:28'),
(214, 'SZ', 'Swaziland', '2020-04-09 02:11:28'),
(215, 'TC', 'Turks and Caicos Islands', '2020-04-09 02:11:28'),
(216, 'TD', 'Chad', '2020-04-09 02:11:28'),
(217, 'TF', 'French Southern Territories', '2020-04-09 02:11:28'),
(218, 'TG', 'Togo', '2020-04-09 02:11:28'),
(219, 'TH', 'Thailand', '2020-04-09 02:11:28'),
(220, 'TJ', 'Tajikistan', '2020-04-09 02:11:28'),
(221, 'TK', 'Tokelau', '2020-04-09 02:11:28'),
(222, 'TL', 'Timor-Leste', '2020-04-09 02:11:28'),
(223, 'TM', 'Turkmenistan', '2020-04-09 02:11:28'),
(224, 'TN', 'Tunisia', '2020-04-09 02:11:28'),
(225, 'TO', 'Tonga', '2020-04-09 02:11:28'),
(226, 'TR', 'Turkey', '2020-04-09 02:11:28'),
(227, 'TT', 'Trinidad and Tobago', '2020-04-09 02:11:28'),
(228, 'TV', 'Tuvalu', '2020-04-09 02:11:28'),
(229, 'TW', 'Taiwan, Province of China', '2020-04-09 02:11:28'),
(230, 'TZ', 'Tanzania, United Republic of', '2020-04-09 02:11:28'),
(231, 'UA', 'Ukraine', '2020-04-09 02:11:28'),
(232, 'UG', 'Uganda', '2020-04-09 02:11:28'),
(233, 'UM', 'United States Minor Outlying Islands', '2020-04-09 02:11:28'),
(234, 'US', 'United States', '2020-04-09 02:11:28'),
(235, 'UY', 'Uruguay', '2020-04-09 02:11:28'),
(236, 'UZ', 'Uzbekistan', '2020-04-09 02:11:28'),
(237, 'VA', 'Holy See', '2020-04-09 02:11:28'),
(238, 'VC', 'Saint Vincent and The Grenadines', '2020-04-09 02:11:28'),
(239, 'VE', 'Venezuela, Bolivarian Republic of', '2020-04-09 02:11:28'),
(240, 'VG', 'Virgin Islands, British', '2020-04-09 02:11:28'),
(241, 'VI', 'Virgin Islands, U.S.', '2020-04-09 02:11:28'),
(242, 'VN', 'Viet Nam', '2020-04-09 02:11:28'),
(243, 'VU', 'Vanuatu', '2020-04-09 02:11:28'),
(244, 'WF', 'Wallis and Futuna', '2020-04-09 02:11:28'),
(245, 'WS', 'Samoa', '2020-04-09 02:11:28'),
(246, 'YE', 'Yemen', '2020-04-09 02:11:28'),
(247, 'YT', 'Mayotte', '2020-04-09 02:11:28'),
(248, 'ZA', 'South Africa', '2020-04-09 02:11:28'),
(249, 'ZM', 'Zambia', '2020-04-09 02:11:28'),
(250, 'ZW', 'Zimbabwe', '2020-04-09 02:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE IF NOT EXISTS `currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `symbol`, `name`, `status`, `created_on`) VALUES
(3, '841', '$', 'USD', '1', '2020-04-12 02:24:01'),
(4, '001', 'RM', 'MYR', '0', '2020-04-12 02:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `type` enum('0','1') NOT NULL,
  `to` enum('0','1') NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `type`, `to`, `title`, `name`, `keywords`, `subject`, `message`, `status`, `created_on`) VALUES
(1, '1', '1', 'Registers', 'register', '[LOGO] [USERNAME] [PASSWORD]', 'Your Registration Detail', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p>[LOGO]</p>\r\n           </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <div>\r\n     <p><!--[if mso]>\r\n                            <table role=\"presentation\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" width=\"500\">\r\n                            <tr>\r\n                            <td align=\"center\" valign=\"middle\" width=\"500\">\r\n                            <![endif]--><span style=\"font-size:22px\"><strong><span style=\"color:#000000\">WELCOME [USERNAME]</span></strong></span></p>\r\n      <!--[if mso]>\r\n                            </td>\r\n                            </tr>\r\n                            </table>\r\n                            <![endif]--></div>\r\n     <!--[if gte mso 9]>\r\n                        </v:textbox>\r\n                        </v:rect>\r\n                        <![endif]--></td>\r\n   </tr>\r\n   <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear Customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your new V Global Networks account has been created. Welcome to the V Global Networks community!</p>\r\n\r\n     <p style=\"text-align:left\">From now on, Please log in to your account using your&nbsp;<strong>[USERNAME]&nbsp;</strong>and&nbsp;<strong>[PASSWORD],&nbsp;</strong></p>\r\n\r\n      <p style=\"text-align:left\">To upload Address.</p>\r\n     </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you very much for your kind support.</p>\r\n\r\n     <p>Regards V Global Networks.</p>\r\n     </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">V Global Networks</span><a href=\"https://vgnet.global\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n            <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@vgnet.global\"><span style=\"color:#ffffff\">inquiry@vgnet.global</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://vgnet.global/\"><span style=\"color:#ffffff\">https://vgnet.global/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2020 <strong>V Global Networks</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n\r\n<div id=\"gtx-trans\" style=\"left:254px; position:absolute; top:64px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(14, '1', '1', 'Forgot Password', 'forgot_pass', '', 'Forgot Password', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p>[LOGO]</p>\r\n           </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer, [USERNAME]</p>\r\n\r\n      <p style=\"text-align:left\">Your new password is :</p>\r\n\r\n     <h1>[PASSWORD]</h1>\r\n     </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards V Global Networks</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">V Global Networks</span><a href=\"https://vgnet.global\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n            <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@vgnet.global\"><span style=\"color:#ffffff\">inquiry@vgnet.global</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://vgnet.global/\"><span style=\"color:#ffffff\">https://vgnet.global/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>V Global Networks</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n           </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(3, '1', '0', 'User Identification', 'identification', '', 'New user identification', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p>[LOGO]</p>\r\n           </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <div>\r\n     <p style=\"text-align:left\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Hi, admin,</strong></span></span></p>\r\n\r\n     <p style=\"text-align:left\">[USERNAME] has updated the identifications, Kindly check their details to approve member.</p>\r\n\r\n      <p style=\"text-align:left\">Thank You.</p>\r\n     <!--[if mso]>\r\n                            </td>\r\n                            </tr>\r\n                            </table>\r\n                            <![endif]--></div>\r\n     <!--[if gte mso 9]>\r\n                        </v:textbox>\r\n                        </v:rect>\r\n                        <![endif]--></td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN --><!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n    <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#26a4d3; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\"><strong>Joveria Berhad<a href=\"https://bnguni-edu.org\">.</a></strong></span><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong></span>&nbsp;<strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></p>\r\n           </td>\r\n         </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019 J</span><strong><span style=\"color:#ffffff\">OVERIA BERHAD</span></strong><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(7, '1', '0', 'Unit Purchase', 'unit', '', 'Unit Purchase', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <div>\r\n     <p style=\"text-align:left\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Hi, admin,</strong></span></span></p>\r\n\r\n     <p style=\"text-align:left\">[USERNAME] has purchased a Unit, member details below.</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Username:&nbsp;[USERNAME]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Ic No : [ICNO]</p>\r\n\r\n      <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Full Name: [FULLNAME]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Address : [ADDRESS]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;City : [CITY]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Postcode : [POSTCODE]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;State : [STATE]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Country: [COUNTRY]</p>\r\n\r\n      <p style=\"text-align:left\">&nbsp;</p>\r\n\r\n     <p style=\"text-align:left\">Thank You.</p>\r\n     <!--[if mso]>\r\n                            </td>\r\n                            </tr>\r\n                            </table>\r\n                            <![endif]--></div>\r\n     <!--[if gte mso 9]>\r\n                        </v:textbox>\r\n                        </v:rect>\r\n                        <![endif]--></td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN --><!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n    <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#26a4d3; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\"><strong>Joveria Berhad<a href=\"https://bnguni-edu.org\">.</a></strong></span><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong></span>&nbsp;<strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></p>\r\n           </td>\r\n         </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019 J</span><strong><span style=\"color:#ffffff\">OVERIA BERHAD</span></strong><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n\r\n<div id=\"gtx-trans\" style=\"left:53px; position:absolute; top:369px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(4, '1', '0', 'Cash Deposit', 'deposit', '', 'Cash Deposit', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <div>\r\n     <p style=\"text-align:left\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Hi, admin,</strong></span></span></p>\r\n\r\n     <p style=\"text-align:left\">[USERNAME] has deposited [AMOUNT] in to the cash wallet, Kindly check the details to approve the payment.</p>\r\n\r\n      <p style=\"text-align:left\">Thank You.</p>\r\n     <!--[if mso]>\r\n                            </td>\r\n                            </tr>\r\n                            </table>\r\n                            <![endif]--></div>\r\n     <!--[if gte mso 9]>\r\n                        </v:textbox>\r\n                        </v:rect>\r\n                        <![endif]--></td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN --><!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n    <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#26a4d3; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\"><strong>Joveria Berhad<a href=\"https://bnguni-edu.org\">.</a></strong></span><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong></span>&nbsp;<strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></p>\r\n           </td>\r\n         </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019 J</span><strong><span style=\"color:#ffffff\">OVERIA BERHAD</span></strong><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(5, '1', '0', 'Cash Withdraw', 'withdraw', '', 'Cash Withdraw', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <div>\r\n     <p style=\"text-align:left\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Hi, admin,</strong></span></span></p>\r\n\r\n     <p style=\"text-align:left\">[USERNAME] has requested to withdraw [AMOUNT] bank details are below, Kindly check their details to approve the withdrawal.</p>\r\n\r\n      <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Full Name : [FULLNAME]</p>\r\n\r\n      <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Bank : [BANK]</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Acc No&nbsp;: [ACC]</p>\r\n\r\n     <p style=\"text-align:left\">Thank You.</p>\r\n     <!--[if mso]>\r\n                            </td>\r\n                            </tr>\r\n                            </table>\r\n                            <![endif]--></div>\r\n     <!--[if gte mso 9]>\r\n                        </v:textbox>\r\n                        </v:rect>\r\n                        <![endif]--></td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN --><!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n    <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#26a4d3; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\"><strong>Joveria Berhad<a href=\"https://bnguni-edu.org\">.</a></strong></span><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong></span>&nbsp;<strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></p>\r\n           </td>\r\n         </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019 J</span><strong><span style=\"color:#ffffff\">OVERIA BERHAD</span></strong><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(6, '1', '0', 'Registers', 'register', '', 'New user registered', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <div>\r\n     <p><!--[if mso]>\r\n                            <table role=\"presentation\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" width=\"500\">\r\n                            <tr>\r\n                            <td align=\"center\" valign=\"middle\" width=\"500\">\r\n                            <![endif]--><span style=\"font-size:22px\"><strong><span style=\"color:#000000\">NEW USER REGISTERED</span></strong></span></p>\r\n     <!--[if mso]>\r\n                            </td>\r\n                            </tr>\r\n                            </table>\r\n                            <![endif]--></div>\r\n     <!--[if gte mso 9]>\r\n                        </v:textbox>\r\n                        </v:rect>\r\n                        <![endif]--></td>\r\n   </tr>\r\n   <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Hi&nbsp;admin,</p>\r\n\r\n     <p style=\"text-align:left\">New user has registered in JOVERIA. Below are the details of the new&nbsp;registered user.</p>\r\n\r\n     <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;Name&nbsp;: [FULLNAME]</p>\r\n\r\n      <p style=\"text-align:left\">&nbsp; &nbsp; &nbsp; &nbsp;USERNAME : [USERNAME]</p>\r\n     </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#26a4d3; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n\r\n<div id=\"gtx-trans\" style=\"left:467px; position:absolute; top:528px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(8, '1', '1', 'User Status Update', 'update', '', 'User have been approved', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear Customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your account has been approved by admin. Now you can Deposit Cash, Purchase Unit and many more.</p>\r\n      </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(9, '1', '1', 'Unit Approved', 'unit', '', 'Unit Approved', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your unit has been approved you will receive your share certificate within two weeks time.</p>\r\n     </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n\r\n<div id=\"gtx-trans\" style=\"left:11px; position:absolute; top:105px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(13, '1', '1', 'Unit Expiry', 'unit_expiry30', '', 'Your Unit is about to expiry', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your Unit [UNIT], is about&nbsp;to expiry in 30 Days.</p>\r\n      </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(10, '1', '1', 'Deposit', 'deposit', '', 'Cash Deposit Accepted', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your fund has been succesfully credited to your cash wallet.</p>\r\n     </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(11, '1', '1', 'Registers', 'withdraw', '', 'New user registered', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your fund has been credited to your bank.</p>\r\n      </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '0', '2020-04-11 02:40:47'),
(12, '1', '1', 'Unit Expired', 'unit_expiry', '', 'Your Unit Expired', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://bnguni-edu.org\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your unit [UNIT],&nbsp; has been expired.</p>\r\n      </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47'),
(15, '1', '1', 'Unit Renewed', 'unit_renew', '', 'Unit Renewed', '<div class=\"email-container\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:680px\"><!--[if mso]>\r\n            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">\r\n            <tr>\r\n            <td>\r\n            <![endif]--><!-- Email Body : BEGIN -->\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"email-container\" style=\"max-width:680px; width:100%\"><!-- HEADER : BEGIN -->\r\n  <tbody>\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#ffffff; text-align:center\">\r\n            <p><a href=\"https://m.joveria.my\">[LOGO]</a></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- HEADER : END --><!-- HERO : BEGIN -->\r\n    <tr>\r\n      <td style=\"text-align:center; vertical-align:top\">\r\n      <p style=\"text-align:left\">Dear customer,</p>\r\n\r\n     <p style=\"text-align:left\">Your unit has been renewed for <strong>[YEAR]</strong> you will receive your new share certificate within two weeks time.<br />\r\n      Your next renewal is on <strong>[RENEWAL]</strong></p>\r\n      </td>\r\n   </tr>\r\n   <!-- HERO : END --><!-- INTRO : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <p>Thank you,</p>\r\n\r\n     <p>Regards JOVERIA</p>\r\n      </td>\r\n   </tr>\r\n   <!-- INTRO : END --><!-- CTA : BEGIN --><!-- CTA : END --><!-- SOCIAL : BEGIN --><!-- SOCIAL : END --><!-- FOOTER : BEGIN -->\r\n   <tr>\r\n      <td>\r\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n       <tbody>\r\n         <tr>\r\n            <td style=\"background-color:#800000; text-align:center\"><strong><span style=\"color:#ffffff\">Joveria Berhad</span><a href=\"https://bnguni-edu.org\"><span style=\"color:#ffffff\">.</span></a></strong><br />\r\n           <span style=\"color:#ffffff\"><strong>57-3, Block 10, Setia Prima S,U13/S,</strong><br />\r\n           <strong>40170 Shah Alam,</strong><br />\r\n           <strong>Selangor D. E.</strong><br />\r\n           <strong>Email:</strong>&nbsp;</span><strong><a href=\"mailto:inquiry@joveria.my\"><span style=\"color:#ffffff\">inquiry@joveria.my</span></a></strong><br />\r\n            <strong><span style=\"color:#ffffff\">Website :&nbsp;</span><a href=\"https://joveria.my/\"><span style=\"color:#ffffff\">https://joveria.my/</span></a></strong></td>\r\n          </tr>\r\n         <tr>\r\n            <td style=\"background-color:#292828; text-align:center\">\r\n            <p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#ffffff\">Copyright &copy; 2010-2019&nbsp;<strong>JOVERIA BERHAD</strong></span><span style=\"color:#ffffff\">, All Rights Reserved.</span></p>\r\n            </td>\r\n         </tr>\r\n       </tbody>\r\n      </table>\r\n      </td>\r\n   </tr>\r\n   <!-- FOOTER : END -->\r\n </tbody>\r\n</table>\r\n</div>\r\n', '1', '2020-04-11 02:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `name`, `type`, `value`, `created_on`) VALUES
(1, 'login-register', 'footer', 'Footer', '2020-11-17 12:16:56'),
(12, 'home', 'footer', 'Footer', '2020-11-17 12:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `license_key`
--

DROP TABLE IF EXISTS `license_key`;
CREATE TABLE IF NOT EXISTS `license_key` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `licenseKey` text NOT NULL,
  `url` text NOT NULL,
  `status` enum('1','2','3','4') NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license_key`
--

INSERT INTO `license_key` (`id`, `user_id`, `licenseKey`, `url`, `status`, `created_on`) VALUES
(1, '1', 'hvuyavuyhvsDCUHDBubcsdh7y982u809', 'projectxvi', '1', '2021-03-18 14:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_ip` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` enum('0','1','2','3') NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `modified_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=833 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `name`, `value`, `modified_on`, `created_on`) VALUES
(679, 'email', 'port', '2', '2020-04-12 14:15:42', '2020-12-14 17:01:19'),
(820, 'site', 'icon', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(678, 'email', 'password', '2', '2020-04-12 14:15:42', '2020-12-14 17:01:19'),
(676, 'email', 'host', '2', '2020-04-12 14:15:42', '2020-12-14 17:01:19'),
(677, 'email', 'username', '2', '2020-04-12 14:15:42', '2020-12-14 17:01:19'),
(821, 'site', 'logo', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(675, 'email', 'protocol', '2', '2020-04-12 14:15:42', '2020-12-14 17:01:19'),
(816, 'site', 'adminmail', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(817, 'site', 'adminphone', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(815, 'site', 'mainurl', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(814, 'site', 'loginstatus', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(813, 'site', 'siteversion', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(811, 'site', 'sitename', 'Jarvis ', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(812, 'site', 'status', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(831, 'site', 'wwwDir', 'D:\\Wamp\\www', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(832, 'site', 'gitToken', 'd616c04f1b177c9ce2bce60dd4ffc4a72072ff4c', '2020-04-30 06:50:44', '2020-12-14 17:01:19'),
(830, 'site', 'mode', '2', '2020-04-30 06:50:44', '2020-12-14 17:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL DEFAULT '1',
  `typemem` varchar(100) NOT NULL,
  `email` varchar(254) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `direct_id` int(11) NOT NULL,
  `board_id` varchar(100) NOT NULL,
  `reentry` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `username` varchar(120) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `second_password` varchar(100) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `ic` varchar(100) NOT NULL,
  `address` text,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(11) DEFAULT NULL,
  `country` varchar(11) DEFAULT NULL,
  `state` varchar(11) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `status` enum('0','1','2','3') NOT NULL DEFAULT '1',
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `registered_ip` varchar(100) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `city_id` (`city`),
  KEY `deleted_active` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `typemem`, `email`, `display_name`, `designation`, `description`, `gender`, `direct_id`, `board_id`, `reentry`, `user_id`, `username`, `password`, `second_password`, `profile_image`, `ic`, `address`, `postcode`, `city`, `country`, `state`, `phone_number`, `status`, `created_on`, `modified_on`, `registered_ip`, `last_login`, `last_ip`) VALUES
(1, '2', '2', 'shuganesh716@gmail.com', '', '', '', 'Female', 0, '', '', NULL, 'shuganesh', '02369609ba87630e8e16a04fc5ef9f97', '02369609ba87630e8e16a04fc5ef9f97', 'https://m.joveria.my/assets/user/images/profile/1_admin.png', '', '', '', '', '', '', '', '1', '2019-12-03 00:00:00', '2019-12-02 08:00:00', '', '2020-05-04 10:05:29', '175.142.251.177');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
