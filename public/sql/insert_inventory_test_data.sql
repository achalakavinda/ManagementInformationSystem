INSERT INTO `brands` (`id`, `parent_id`, `level`, `name`, `company_id`, `company_division_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 'Atlas Sounds', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(2, NULL, 0, 'Audio Technica', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(3, NULL, 0, 'Dimer 2', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(4, NULL, 0, 'Double Relay', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(5, NULL, 0, 'Genelec', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(6, NULL, 0, 'Klark Teknik', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(7, NULL, 0, 'Klotz', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(8, NULL, 0, 'Lab Gruppen', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(9, NULL, 0, 'MIDAS', 1, 1, '2018-12-07 16:00:55', '2018-12-07 16:00:55'),
(10, NULL, 0, 'Motu', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(11, NULL, 0, 'Rack in the case', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(12, NULL, 0, 'Roylight', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(13, NULL, 0, 'Sonodyne', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(14, NULL, 0, 'Sonos', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(15, NULL, 0, 'Tannoy', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(16, NULL, 0, 'Turbosound', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56'),
(17, NULL, 0, 'Xilica', 1, 1, '2018-12-07 16:00:56', '2018-12-07 16:00:56');


--
-- Dumping data for table `item_codes`
--

INSERT INTO `item_codes` (`id`, `name`, `brand_id`, `description`, `thumbnail_url`, `unit_cost`, `selling_price`, `nbt_tax_percentage`, `vat_tax_percentage`, `unit_price_with_tax`, `company_id`, `company_division_id`, `type_measurement_id`, `created_at`, `updated_at`) VALUES
(1, 'AA240', 1, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 115553.36, 115553.36, 0.00, 0.00, 115553.36, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(2, 'AT10', 1, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 2702.03, 2702.03, 0.00, 0.00, 2702.03, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(3, 'AT35', 1, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 3336.14, 3336.14, 0.00, 0.00, 3336.14, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(4, 'CP700', 1, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 115553.36, 115553.36, 0.00, 0.00, 115553.36, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(5, 'SD72W-KIT', 1, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 6568.17, 6568.17, 0.00, 0.00, 6568.17, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(6, 'AT 2021', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 8173.59, 8173.59, 0.00, 0.00, 8173.59, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(7, 'AT LP 120USB ', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 34619.73, 34619.73, 0.00, 0.00, 34619.73, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(8, 'AT2005USB', 2, 'Cardiod Dynamic MIC', 'http://itinerantnotes.com/blog/images/logo.png', 7033.09, 7033.09, 0.00, 0.00, 7033.09, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(9, 'AT2020USB', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16157.10, 16157.10, 0.00, 0.00, 16157.10, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(10, 'AT831CW', 2, 'Lavalier Mic For Wireless', 'http://itinerantnotes.com/blog/images/logo.png', 6652.92, 6652.92, 0.00, 0.00, 6652.92, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(11, 'AT91BL', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 2561.67, 2561.67, 0.00, 0.00, 2561.67, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(12, 'AT95E/BL', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 3941.39, 3941.39, 0.00, 0.00, 3941.39, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(13, 'AT9945CM', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 15955.55, 15955.55, 0.00, 0.00, 15955.55, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(14, 'AT9946CM', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 11687.16, 11687.16, 0.00, 0.00, 11687.16, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(15, 'AT-HA21', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 17540.74, 17540.74, 0.00, 0.00, 17540.74, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(16, 'ATH-AR3BT BK', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 10716.41, 10716.41, 0.00, 0.00, 10716.41, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(17, 'ATH-AR3BT BL', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 10716.41, 10716.41, 0.00, 0.00, 10716.41, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(18, 'ATH-AR3BT RD', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 10716.41, 10716.41, 0.00, 0.00, 10716.41, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(19, 'ATH-AR3BT WH', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 10716.41, 10716.41, 0.00, 0.00, 10716.41, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(20, 'ATH-CKR50IS CG', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 4778.11, 4778.11, 0.00, 0.00, 4778.11, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(21, 'ATH-CKR50IS RD', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 4785.79, 4785.79, 0.00, 0.00, 4785.79, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(22, 'ATH-CLR100IS LG', 2, 'Inner Ear HeadPhone', 'http://itinerantnotes.com/blog/images/logo.png', 1367.75, 1367.75, 0.00, 0.00, 1367.75, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(23, 'ATH-E40', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 8338.08, 8338.08, 0.00, 0.00, 8338.08, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(24, 'ATH-E50', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 18113.37, 18113.37, 0.00, 0.00, 18113.37, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(25, 'ATH-HA26D', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 26410.18, 26410.18, 0.00, 0.00, 26410.18, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(26, 'ATH-J100 BK (EX)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 788.96, 788.96, 0.00, 0.00, 788.96, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(27, 'ATH-J100 LGR ', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 788.96, 788.96, 0.00, 0.00, 788.96, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(28, 'ATH-J100 MX', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 788.96, 788.96, 0.00, 0.00, 788.96, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(29, 'ATH-S100IS BGR (EX)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 2607.43, 2607.43, 0.00, 0.00, 2607.43, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(30, 'ATH-SPORT1IS PK(Ex)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 3056.77, 3056.77, 0.00, 0.00, 3056.77, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(31, 'ATH-SPORT1IS RD(Ex)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 3048.16, 3048.16, 0.00, 0.00, 3048.16, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(32, 'ATH-SPORT3 BK (EX)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 4225.64, 4225.64, 0.00, 0.00, 4225.64, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(33, 'ATH-SPORT3 RD (EX)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 4198.53, 4198.53, 0.00, 0.00, 4198.53, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(34, 'AT-LP60USB RD (SG)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16348.24, 16348.24, 0.00, 0.00, 16348.24, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(35, 'ATR-3350IS', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 2509.10, 2509.10, 0.00, 0.00, 2509.10, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(36, 'ATR6250', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 3497.57, 3497.57, 0.00, 0.00, 3497.57, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(37, 'ATW 1102 ', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 32314.19, 32314.19, 0.00, 0.00, 32314.19, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(38, 'ATW-1101', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 32694.36, 32694.36, 0.00, 0.00, 32694.36, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(39, 'ATW-1702 (W2)', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 42578.70, 42578.70, 0.00, 0.00, 42578.70, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(40, 'MB/DK7', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 39727.45, 39727.45, 0.00, 0.00, 39727.45, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(41, 'MB1 K/C', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 10169.47, 10169.47, 0.00, 0.00, 10169.47, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(42, 'MB2 K/C', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 5322.34, 5322.34, 0.00, 0.00, 5322.34, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(43, 'MT830CW', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 10074.42, 10074.42, 0.00, 0.00, 10074.42, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(44, 'PRO25ax', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16157.10, 16157.10, 0.00, 0.00, 16157.10, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(45, 'PRO31', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 5702.50, 5702.50, 0.00, 0.00, 5702.50, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(46, 'PRO41', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 8173.59, 8173.59, 0.00, 0.00, 8173.59, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(47, 'PRO45', 2, 'Microphone/Hanging P#140307621', 'http://itinerantnotes.com/blog/images/logo.png', 11807.12, 11807.12, 0.00, 0.00, 11807.12, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(48, 'PRO49Q', 2, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 13088.75, 13088.75, 0.00, 0.00, 13088.75, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(49, 'Dimer 2', 3, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16491.51, 16491.51, 0.00, 0.00, 16491.51, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(50, 'Double Relay', 4, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16491.51, 16491.51, 0.00, 0.00, 16491.51, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(51, '7040APM-7', 5, '0', 'http://itinerantnotes.com/blog/images/logo.png', 60941.00, 60941.00, 0.00, 0.00, 60941.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(52, '7360APM-7', 5, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 217498.06, 217498.06, 0.00, 0.00, 217498.06, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(53, '8040BPM-7', 5, 'Monitor Dark Gray 240v', 'http://itinerantnotes.com/blog/images/logo.png', 80629.61, 80629.61, 0.00, 0.00, 80629.61, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(54, '8050BPM-7', 5, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 164213.31, 164213.31, 0.00, 0.00, 164213.31, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(55, 'M030AM-7', 5, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 38908.00, 38908.00, 0.00, 0.00, 38908.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(56, 'M040AM-7', 5, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 58597.00, 58597.00, 0.00, 0.00, 58597.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(57, 'DN 100', 6, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 7369.25, 7369.25, 0.00, 0.00, 7369.25, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(58, 'LED AMP18-RA', 6, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 12334.00, 12334.00, 0.00, 0.00, 12334.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(59, 'SQ 1D', 6, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 41146.66, 41146.66, 0.00, 0.00, 41146.66, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(60, 'SQ 1G', 6, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 39614.72, 39614.72, 0.00, 0.00, 39614.72, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(61, 'C5FUEY.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 13340.12, 13340.12, 0.00, 0.00, 13340.12, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(62, 'HA-HA-HE03', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1909.41, 1909.41, 0.00, 0.00, 1909.41, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(63, 'HC-HA-G01', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1435.80, 1435.80, 0.00, 0.00, 1435.80, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(64, 'KIK6.0PPSW', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1575.10, 1575.10, 0.00, 0.00, 1575.10, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(65, 'KIKA03PR1', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1699.39, 1699.39, 0.00, 0.00, 1699.39, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(66, 'KIKA03PR2', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1699.39, 1699.39, 0.00, 0.00, 1699.39, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(67, 'KIKA06PR1', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2160.13, 2160.13, 0.00, 0.00, 2160.13, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(68, 'KIKA06PR2', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2160.13, 2160.13, 0.00, 0.00, 2160.13, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(69, 'KIKA06PR3', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2160.13, 2160.13, 0.00, 0.00, 2160.13, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(70, 'KIKA09PR1', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2618.74, 2618.74, 0.00, 0.00, 2618.74, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(71, 'KIKA09PR2', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2618.74, 2618.74, 0.00, 0.00, 2618.74, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(72, 'KIKC3.0PP2', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1392.94, 1392.94, 0.00, 0.00, 1392.94, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(73, 'KIKC4.5PP2', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1547.24, 1547.24, 0.00, 0.00, 1547.24, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(74, 'KIKC4.5PP4', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1547.24, 1547.24, 0.00, 0.00, 1547.24, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(75, 'KIKC6.0PP2', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 1727.25, 1727.25, 0.00, 0.00, 1727.25, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(76, 'LSC415YB.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 31480.54, 31480.54, 0.00, 0.00, 31480.54, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(77, 'LY225S.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 206.16, 206.16, 0.00, 0.00, 206.16, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(78, 'LY240S.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 43877.74, 43877.74, 0.00, 0.00, 43877.74, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(79, 'LYP007T.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 8496.96, 8496.96, 0.00, 0.00, 8496.96, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(80, 'LYP015S.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 15600.97, 15600.97, 0.00, 0.00, 15600.97, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(81, 'M1FM1K0750', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2605.88, 2605.88, 0.00, 0.00, 2605.88, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(82, 'M1FM1N0500', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2590.88, 2590.88, 0.00, 0.00, 2590.88, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(83, 'M1FM1N1000', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 3218.77, 3218.77, 0.00, 0.00, 3218.77, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(84, 'M1FM2N0500', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2590.88, 2590.88, 0.00, 0.00, 2590.88, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(85, 'M1FM2N1000', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 3218.77, 3218.77, 0.00, 0.00, 3218.77, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(86, 'M1FM3N0500', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 2590.88, 2590.88, 0.00, 0.00, 2590.88, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(87, 'MY203SW.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 121.19, 121.19, 0.00, 0.00, 121.19, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(88, 'PW02X (300m)', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 135651.33, 135651.33, 0.00, 0.00, 135651.33, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(89, 'PW08X.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 559.32, 559.32, 0.00, 0.00, 559.32, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(90, 'PW24X.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 233875.33, 233875.33, 0.00, 0.00, 233875.33, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(91, 'TP414.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 25351.58, 25351.58, 0.00, 0.00, 25351.58, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(92, 'VA063LB.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 172.73, 172.73, 0.00, 0.00, 172.73, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(93, 'VA063LG.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 18944.04, 18944.04, 0.00, 0.00, 18944.04, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(94, 'VD062SH.A', 7, 'Cables', 'http://itinerantnotes.com/blog/images/logo.png', 12118.61, 12118.61, 0.00, 0.00, 12118.61, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(95, 'FP10000Q/SP', 8, 'FP10000Q/SP', 'http://itinerantnotes.com/blog/images/logo.png', 632420.00, 632420.00, 0.00, 0.00, 632420.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(96, 'FP14000-BP', 8, 'FP14000-BP', 'http://itinerantnotes.com/blog/images/logo.png', 593166.00, 593166.00, 0.00, 0.00, 593166.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(97, 'FP7000/SP', 8, 'FP7000/SP', 'http://itinerantnotes.com/blog/images/logo.png', 475405.00, 475405.00, 0.00, 0.00, 475405.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(98, 'IPD 1200 EU', 8, 'Power Amplifier', 'http://itinerantnotes.com/blog/images/logo.png', 146111.00, 146111.00, 0.00, 0.00, 146111.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(99, 'IPD 2400 EU', 8, 'Power Amplifier', 'http://itinerantnotes.com/blog/images/logo.png', 200630.00, 200630.00, 0.00, 0.00, 200630.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(100, 'Lucia 120/2M', 8, 'Lucia 120/2M', 'http://itinerantnotes.com/blog/images/logo.png', 65423.00, 65423.00, 0.00, 0.00, 65423.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(101, 'Lucia 240/2M', 8, 'Lucia 240/2M', 'http://itinerantnotes.com/blog/images/logo.png', 80688.00, 80688.00, 0.00, 0.00, 80688.00, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(102, 'Power Amplifier E 4:2 EU / S/N 38018622,38019069', 8, 'Power Amplifier E 4:2 EU / S/N 38018622,38019069', 'http://itinerantnotes.com/blog/images/logo.png', 154731.55, 154731.55, 0.00, 0.00, 154731.55, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(103, 'CAT5E-30M', 9, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 27945.42, 27945.42, 0.00, 0.00, 27945.42, 1, 1, NULL, '2018-12-06 23:30:55', '2018-12-06 23:30:55'),
(104, 'CAT5E-5M', 9, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 8302.06, 8302.06, 0.00, 0.00, 8302.06, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(105, 'DL 16', 9, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 110687.45, 110687.45, 0.00, 0.00, 110687.45, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(106, 'DL 32', 9, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 184401.05, 184401.05, 0.00, 0.00, 184401.05, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(107, 'DM 16', 9, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 32686.23, 32686.23, 0.00, 0.00, 32686.23, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(108, 'M 32 C', 9, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 92220.71, 92220.71, 0.00, 0.00, 92220.71, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(109, '828X', 10, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 133400.58, 133400.58, 0.00, 0.00, 133400.58, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(110, '8PRE USB', 10, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 94325.77, 94325.77, 0.00, 0.00, 94325.77, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(111, 'AUDIO EXPRESS', 10, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 65965.01, 65965.01, 0.00, 0.00, 65965.01, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(112, 'MICROBOOK IIC', 10, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 39232.38, 39232.38, 0.00, 0.00, 39232.38, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(113, 'ULRALITE AVB', 10, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 102256.27, 102256.27, 0.00, 0.00, 102256.27, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(114, 'ULTRALITE MK3 HYBRID', 10, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 94325.77, 94325.77, 0.00, 0.00, 94325.77, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(115, 'RK10UABS', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 22840.35, 22840.35, 0.00, 0.00, 22840.35, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(116, 'RK12UABS', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 24572.65, 24572.65, 0.00, 0.00, 24572.65, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(117, 'RK2UABS', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 16260.14, 16260.14, 0.00, 0.00, 16260.14, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(118, 'RK4UABS', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 17313.48, 17313.48, 0.00, 0.00, 17313.48, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(119, 'RK6UABS', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 19369.40, 19369.40, 0.00, 0.00, 19369.40, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(120, 'RK6UAD', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 30451.68, 30451.68, 0.00, 0.00, 30451.68, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(121, 'RK8UABS', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 21104.87, 21104.87, 0.00, 0.00, 21104.87, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(122, 'RK8UADC', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 41518.10, 41518.10, 0.00, 0.00, 41518.10, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(123, 'RKM 18', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 27069.57, 27069.57, 0.00, 0.00, 27069.57, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(124, 'RKMIDAS M 32', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 57503.80, 57503.80, 0.00, 0.00, 57503.80, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(125, 'RKMIDAS M32R', 11, 'Flight case', 'http://itinerantnotes.com/blog/images/logo.png', 59089.20, 59089.20, 0.00, 0.00, 59089.20, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(126, 'R-DS8', 12, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16846.31, 16846.31, 0.00, 0.00, 16846.31, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(127, 'R-LMB108', 12, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 35096.48, 35096.48, 0.00, 0.00, 35096.48, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(128, 'R-LP64', 12, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 11230.87, 11230.87, 0.00, 0.00, 11230.87, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(129, 'R-Lp72', 12, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 14038.59, 14038.59, 0.00, 0.00, 14038.59, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(130, 'R-P750', 12, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 31586.83, 31586.83, 0.00, 0.00, 31586.83, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(131, 'AMC 250+,Mixed Amplifier', 13, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 93694.35, 93694.35, 0.00, 0.00, 93694.35, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(132, 'AW2-WH', 13, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 26096.16, 26096.16, 0.00, 0.00, 26096.16, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(133, 'Install 204, Wall Mounted 30W Speaker', 13, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 15450.69, 15450.69, 0.00, 0.00, 15450.69, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(134, 'SVC 10i, Ceiling Speaker', 13, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 3176.08, 3176.08, 0.00, 0.00, 3176.08, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(135, 'Connect', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 60273.14, 60273.14, 0.00, 0.00, 60273.14, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(136, 'Connect Amp', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 86144.45, 86144.45, 0.00, 0.00, 86144.45, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(137, 'Play 1 (Black)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 38233.53, 38233.53, 0.00, 0.00, 38233.53, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(138, 'Play 1 (White)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 38233.53, 38233.53, 0.00, 0.00, 38233.53, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(139, 'Play 1 Mount (Black)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 7579.91, 7579.91, 0.00, 0.00, 7579.91, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(140, 'Play 1 Mount (White)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 7579.91, 7579.91, 0.00, 0.00, 7579.91, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(141, 'Play 3 Mount (White)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 9776.99, 9776.99, 0.00, 0.00, 9776.99, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(142, 'Play 5 (Black)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 95726.63, 95726.63, 0.00, 0.00, 95726.63, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(143, 'Play 5 (White)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 95726.63, 95726.63, 0.00, 0.00, 95726.63, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(144, 'Playbar', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 124473.19, 124473.19, 0.00, 0.00, 124473.19, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(145, 'Playbar Wall Mount', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 7579.91, 7579.91, 0.00, 0.00, 7579.91, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(146, 'Stands (Black)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 17466.76, 17466.76, 0.00, 0.00, 17466.76, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(147, 'Stands (White)', 14, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 17466.76, 17466.76, 0.00, 0.00, 17466.76, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(148, 'AMS 5DC Black', 15, 'L/Speaker AMS 5DC Black', 'http://itinerantnotes.com/blog/images/logo.png', 27546.70, 27546.70, 0.00, 0.00, 27546.70, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(149, 'AMS 5DC White', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 27546.70, 27546.70, 0.00, 0.00, 27546.70, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(150, 'AMS 8DC Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 68751.01, 68751.01, 0.00, 0.00, 68751.01, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(151, 'AMS 8DC White', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 68751.01, 68751.01, 0.00, 0.00, 68751.01, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(152, 'CVS 4 (white)', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 14352.06, 14352.06, 0.00, 0.00, 14352.06, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(153, 'Cvs 6 ( white )', 15, 'L/Speaker CVS 6', 'http://itinerantnotes.com/blog/images/logo.png', 20717.90, 20717.90, 0.00, 0.00, 20717.90, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(154, 'DVS4t Black', 15, 'L/Speaker DVS4t Black', 'http://itinerantnotes.com/blog/images/logo.png', 17361.37, 17361.37, 0.00, 0.00, 17361.37, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(155, 'DVS4t White', 15, 'L/Speaker DVS4t White', 'http://itinerantnotes.com/blog/images/logo.png', 17361.37, 17361.37, 0.00, 0.00, 17361.37, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(156, 'DVS6 Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 22917.00, 22917.00, 0.00, 0.00, 22917.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(157, 'DVS6 White', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 22917.00, 22917.00, 0.00, 0.00, 22917.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(158, 'REVEAL 402', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 16472.28, 16472.28, 0.00, 0.00, 16472.28, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(159, 'REVEAL 502', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 25561.21, 25561.21, 0.00, 0.00, 25561.21, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(160, 'REVEAL 802', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 39762.67, 39762.67, 0.00, 0.00, 39762.67, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(161, 'VX 12.2Q Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 266207.62, 266207.62, 0.00, 0.00, 266207.62, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(162, 'VX 12Q Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 175812.77, 175812.77, 0.00, 0.00, 175812.77, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(163, 'VX 15Q Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 232526.57, 232526.57, 0.00, 0.00, 232526.57, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(164, 'VX 8.2 Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 129631.54, 129631.54, 0.00, 0.00, 129631.54, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(165, 'VXP 12 Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 212966.10, 212966.10, 0.00, 0.00, 212966.10, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(166, 'VXP 15HP Black', 15, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 284031.96, 284031.96, 0.00, 0.00, 284031.96, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(167, 'DM8000-EU', 16, '0', 'http://itinerantnotes.com/blog/images/logo.png', 130781.25, 130781.25, 0.00, 0.00, 130781.25, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(168, 'IP 12B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 56676.60, 56676.60, 0.00, 0.00, 56676.60, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(169, 'IQ 10', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 60845.11, 60845.11, 0.00, 0.00, 60845.11, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(170, 'IQ 12', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 66880.16, 66880.16, 0.00, 0.00, 66880.16, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(171, 'IQ 15B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 84877.19, 84877.19, 0.00, 0.00, 84877.19, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(172, 'IQ 18B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 92306.45, 92306.45, 0.00, 0.00, 92306.45, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(173, 'IX 12', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 38742.74, 38742.74, 0.00, 0.00, 38742.74, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(174, 'IX 15', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 57967.19, 57967.19, 0.00, 0.00, 57967.19, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(175, 'M 10', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 39099.54, 39099.54, 0.00, 0.00, 39099.54, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(176, 'M 15', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 62434.52, 62434.52, 0.00, 0.00, 62434.52, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(177, 'M 15B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 90006.00, 90006.00, 0.00, 0.00, 90006.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(178, 'M 18B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 102314.82, 102314.82, 0.00, 0.00, 102314.82, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(179, 'NUQ 122', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 48940.00, 48940.00, 0.00, 0.00, 48940.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(180, 'NUQ 82 ', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 41950.00, 41950.00, 0.00, 0.00, 41950.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(181, 'TBV118L-AN-EU', 16, '0', 'http://itinerantnotes.com/blog/images/logo.png', 198787.50, 198787.50, 0.00, 0.00, 198787.50, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(182, 'TBV123-AN-EU', 16, '0', 'http://itinerantnotes.com/blog/images/logo.png', 261562.50, 261562.50, 0.00, 0.00, 261562.50, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(183, 'TBV123-FB', 16, '0', 'http://itinerantnotes.com/blog/images/logo.png', 81375.00, 81375.00, 0.00, 0.00, 81375.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(184, 'TC 132 T', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 33940.07, 33940.07, 0.00, 0.00, 33940.07, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(185, 'TC 132 TR', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 36891.38, 36891.38, 0.00, 0.00, 36891.38, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(186, 'TLX 43', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 74000.00, 74000.00, 0.00, 0.00, 74000.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(187, 'TLX 84', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 143079.00, 143079.00, 0.00, 0.00, 143079.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(188, 'TLX212L', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 148013.00, 148013.00, 0.00, 0.00, 148013.00, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(189, 'TLX43-FLB', 16, '0', 'http://itinerantnotes.com/blog/images/logo.png', 49661.01, 49661.01, 0.00, 0.00, 49661.01, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(190, 'TMS 122M', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 88986.88, 88986.88, 0.00, 0.00, 88986.88, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(191, 'TMS 152', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 94787.96, 94787.96, 0.00, 0.00, 94787.96, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(192, 'TPX 118B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 41539.42, 41539.42, 0.00, 0.00, 41539.42, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(193, 'TPX 122M', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 23389.02, 23389.02, 0.00, 0.00, 23389.02, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(194, 'TPX 152', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 30081.07, 30081.07, 0.00, 0.00, 30081.07, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(195, 'TPX 153', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 42501.43, 42501.43, 0.00, 0.00, 42501.43, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(196, 'TVX 118 B', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 51346.54, 51346.54, 0.00, 0.00, 51346.54, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(197, 'TVX 152', 16, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 47396.81, 47396.81, 0.00, 0.00, 47396.81, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(198, 'XA - 2060', 17, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 70348.47, 70348.47, 0.00, 0.00, 70348.47, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(199, 'XA-2040', 17, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 64431.54, 64431.54, 0.00, 0.00, 64431.54, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(200, 'XD 4080', 17, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 153842.89, 153842.89, 0.00, 0.00, 153842.89, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(201, 'XD-8080', 17, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 180633.42, 180633.42, 0.00, 0.00, 180633.42, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56'),
(202, 'XP-2040', 17, NULL, 'http://itinerantnotes.com/blog/images/logo.png', 79552.58, 79552.58, 0.00, 0.00, 79552.58, 1, 1, NULL, '2018-12-06 23:30:56', '2018-12-06 23:30:56');



