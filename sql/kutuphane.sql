-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Nis 2017, 16:31:00
-- Sunucu sürümü: 5.7.11
-- PHP Sürümü: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kutuphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE `kitap` (
  `id` int(11) NOT NULL,
  `ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `yazar` int(11) NOT NULL,
  `ozet` text COLLATE utf8_turkish_ci NOT NULL,
  `isbn` varchar(13) COLLATE utf8_turkish_ci NOT NULL,
  `yayin` int(11) NOT NULL,
  `yil` int(11) NOT NULL,
  `kaynak` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `konum` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`id`, `ad`, `yazar`, `ozet`, `isbn`, `yayin`, `yil`, `kaynak`, `resim`, `konum`) VALUES
(1, 'Hayvanlardan Tanrılara - Sapiens', 1, '\r\n- Homo sapiens neden ekolojik bir seri katile dönüştü?\r\n- Para neden herkesin güvendiği tek şey?\r\n- Kadınlar üstün sosyal becerilere sahipken, neden çoğu toplum erkek egemen?\r\n- Güç elde etmekte böylesine yetenekli olan insanlar neden bu gücü mutluluğa dönüştürmekte başarısızlar?\r\n- Geleceğin dini bilim mi?\r\n- İnsanların miadı çoktan doldu mu?\r\n100 bin yıl önce Yeryüzü\'nde en az altı farklı insan türü vardı. Günümüzdeyse sadece Homo Sapiens var. Diğerlerinin başına ne geldi ve bize ne olacak? \r\n\r\nÇoğu çalışma insanlığın serüvenini ya tarihi ya da biyolojik bir yaklaşımla ele alır, ancak Harari 70 bin yıl önce gerçekleşen Bilişsel Devrim\'le başlattığı bu kitabında gelenekleri yerle bir ediyor. İnsanların küresel ekosistemde oynadıkları rolden imparatorlukların yükselişine ve modern dünyaya kadar pek çok konuyu irdeleyen Sapiens, tarihle bilimi bir araya getirerek kabul görmüş anlatıları yeniden ele alıyor.\r\n\r\nHarari ayrıca geleceğe bakmaya da zorluyor okuru. Yakın zamanda insanlar, dört milyar yıldır yaşama hükmeden doğal seçilim yasalarını esnetmeye başladılar. Artık sadece dünyayı değil, kendimizi ve diğer canlıları tasarlama becerisi de kazandık. Peki bu bizi nereye götürüyor, bizi neye dönüştürebilir?\r\n\r\n30\'dan fazla dile çevrilmiş bu kışkırtıcı çalışma özellikle Jared Diamond, James Gleick, Matt Ridley ve Robert Wright\'ın eserlerine aşina okurlar için muhteşem bir kaynak.\r\n\r\n"Sapiens, tarihin ve modern dünyanın en büyük sorularını gayet yalın bir dille ele alıyor. Çok seveceksiniz!" \r\n-Jared Diamond, Tüfek, Mikrop ve Çelik\'in yazarı-\r\n\r\n"Harari\'nin eseri kabul görmüş doktrinlerin karşısında duran fikirler ve şaşırtıcı gerçeklerle bezeli."\r\n-John Gray, Financial Times-', '9786055029357', 1, 2016, 'bağış', 'http://i.dr.com.tr/cache/600x600-0/originals/0000000633872-1.jpg', 'D-3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odunc`
--

CREATE TABLE `odunc` (
  `id` int(11) NOT NULL,
  `ogrenci` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `teslim` date NOT NULL,
  `kitap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odunc`
--

INSERT INTO `odunc` (`id`, `ogrenci`, `tarih`, `teslim`, `kitap`) VALUES
(1, '228', '2017-04-30', '2017-01-01', 1),
(2, '', '2017-04-30', '1970-01-01', 1),
(3, '', '2017-04-30', '1970-01-01', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayin`
--

CREATE TABLE `yayin` (
  `id` int(11) NOT NULL,
  `y_ad` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yayin`
--

INSERT INTO `yayin` (`id`, `y_ad`) VALUES
(1, 'Kolektif Kitap');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE `yazar` (
  `id` int(11) NOT NULL,
  `ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`id`, `ad`) VALUES
(1, 'Yuval Noah Harari');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kitap`
--
ALTER TABLE `kitap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odunc`
--
ALTER TABLE `odunc`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yayin`
--
ALTER TABLE `yayin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazar`
--
ALTER TABLE `yazar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kitap`
--
ALTER TABLE `kitap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `odunc`
--
ALTER TABLE `odunc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `yayin`
--
ALTER TABLE `yayin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `yazar`
--
ALTER TABLE `yazar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
