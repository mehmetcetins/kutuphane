-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 May 2017, 08:33:34
-- Sunucu sürümü: 10.1.19-MariaDB
-- PHP Sürümü: 5.6.24

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
(5, 'Frida', 2, 'Düşlerimi Ya Da Kâbuslarımı Değil Kendi Gerçekliğimi Resmediyorum.”\r\n\r\nFrida Kahlo kimdi? Dünyaca ünlü bir ressamdı, bir komünist, bir feminist, bir âşık ve her şeyden öte, bir ablaydı. Frida’da, ünlü ressamın hayat hikâyesini küçük kız kardeşi Cristina’nın gözünden okuyacaksınız. Tablolarında kendi gerçekliğini yaratan Frida gibi, Cristina da ablasını anlatırken kendi gerçekliğini yaratır ve okurları sihirli bir yolculuğa çıkartır.', '9786059115834', 2, 2017, 'Bağış', '/uploads/5b76949d3291412c965762094a576366.jpg', 'D-33'),
(6, 'Hayvanlardan Tanrılara - Sapiens', 1, '- Homo sapiens neden ekolojik bir seri katile dönüştü? - Para neden herkesin güvendiği tek şey? - Kadınlar üstün sosyal becerilere sahipken, neden çoğu toplum erkek egemen? - Güç elde etmekte böylesine yetenekli olan insanlar neden bu gücü mutluluğa dönüştürmekte başarısızlar? - Geleceğin dini bilim mi? - İnsanların miadı çoktan doldu mu? 100 bin yıl önce Yeryüzü''nde en az altı farklı insan türü vardı. Günümüzdeyse sadece Homo Sapiens var. Diğerlerinin başına ne geldi ve bize ne olacak? Çoğu çalışma insanlığın serüvenini ya tarihi ya da biyolojik bir yaklaşımla ele alır, ancak Harari 70 bin yıl önce gerçekleşen Bilişsel Devrim''le başlattığı bu kitabında gelenekleri yerle bir ediyor. İnsanların küresel ekosistemde oynadıkları rolden imparatorlukların yükselişine ve modern dünyaya kadar pek çok konuyu irdeleyen Sapiens, tarihle bilimi bir araya getirerek kabul görmüş anlatıları yeniden ele alıyor. Harari ayrıca geleceğe bakmaya da zorluyor okuru. Yakın zamanda insanlar, dört milyar yıldır yaşama hükmeden doğal seçilim yasalarını esnetmeye başladılar. Artık sadece dünyayı değil, kendimizi ve diğer canlıları tasarlama becerisi de kazandık. Peki bu bizi nereye götürüyor, bizi neye dönüştürebilir? 30''dan fazla dile çevrilmiş bu kışkırtıcı çalışma özellikle Jared Diamond, James Gleick, Matt Ridley ve Robert Wright''ın eserlerine aşina okurlar için muhteşem bir kaynak. "Sapiens, tarihin ve modern dünyanın en büyük sorularını gayet yalın bir dille ele alıyor. Çok seveceksiniz!" -Jared Diamond, Tüfek, Mikrop ve Çelik''in yazarı- "Harari''nin eseri kabul görmüş doktrinlerin karşısında duran fikirler ve şaşırtıcı gerçeklerle bezeli." -John Gray, Financial Times-', '9786055029357', 1, 2016, 'Bağış', '/uploads/c38f82c425a31e054ef9beb76b47e6c4.jpg', 'D-45'),
(8, 'Vatansız', 8, 'Bir çocuk öykülerle büyür, bir ülke öykülerle beslenir, destanlaşalarak vatan olur. Bu kitap bir ülkenin, bir tarihin izdüşümünde, gerçeğin anaforundan süzülerek gelen öykülerle Vatan’ın gerçek tanığı...\r\n\r\nKurgusal bir roman ama aynı zamanda da bir ülkenin, Vatan’ın panoraması.\r\n\r\nBu kitap, toplumsal belleğimizin vicdanı, zihinsel hafızası, düşsel bir serüvenin doğru rol modeli.\r\n\r\nSarı saçlı mavi gözlü adam: “Bana bak çocuk” dedi, “vatanı ruhundan çıkarırsan ölürsün çocuk!”', '9786056746512', 6, 2017, 'bağış', '/uploads/05f62eccd79ec8ff725095b4aed393a1.jpg', 'f-42'),
(9, 'Fi', 9, 'Fi, deneyimin içinde kaybolmak yerine korkmadan deneyime sahip olmanın yolculuğudur. İçinde bolca bulunan manipülasyon, seks, aldatma ve aldanma hikâyeleri belki herkesin dikkatini çekebilir ama gerçeklerden yola çıkılarak ulaşılmak istenen yerde sadece farkındalık vardır.\r\n\r\nFi güzelliğin lanetlendiği, zekânın yağmalandığı, iyinin kurban edildiği ve kasaba kurnazlığıyla yönetilen bu gezegende, içine doğduğumuz bu kutsal hayatı kutlamak için yazılmıştır. Kendi potansiyelini keşfetme cesareti gösterebilmiş gerçek kişilere, çatlama cesareti gösterebilmiş tohumlara adanmıştır.\r\n\r\nBir kişiye duyulan aşktan daha acımasız bir şey var mıdır?', '9786054994861', 7, 2014, 'bağış', '/uploads/5bbc4acf1009fd76bf5be1c82dca50ab.jpg', 'f-53');

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
(13, '152', '2017-05-25', '2017-05-26', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL,
  `ogrenci_no` int(11) NOT NULL,
  `ad` int(11) NOT NULL,
  `soyad` int(11) NOT NULL,
  `sınıf` int(11) NOT NULL,
  `alanı` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayin`
--

CREATE TABLE `yayin` (
  `id` int(11) NOT NULL,
  `yayin_ad` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yayin`
--

INSERT INTO `yayin` (`id`, `yayin_ad`) VALUES
(1, 'Kolektif Kitap'),
(2, 'Zeplin Kitap'),
(6, 'Librum Kitap'),
(7, 'Destek Yayınları');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE `yazar` (
  `id` int(11) NOT NULL,
  `yazar_ad` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`id`, `yazar_ad`) VALUES
(1, 'Yuval Noah Harari'),
(2, 'Barbara Mujica'),
(8, 'Serkan Şen'),
(9, 'Akilah Azra Kohen');

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
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `odunc`
--
ALTER TABLE `odunc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `yayin`
--
ALTER TABLE `yayin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `yazar`
--
ALTER TABLE `yazar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
