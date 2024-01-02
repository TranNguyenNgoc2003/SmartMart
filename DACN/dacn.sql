CREATE DATABASE dacn;
USE dacn;

-- table user
CREATE TABLE userData(
	user_id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(255) NOT NULL,
	NgaySinh DATE,
  GioiTinh VARCHAR(10),
  DiaChi VARCHAR(255),
  user_phone VARCHAR(20) NOT NULL,
  user_email VARCHAR(255) NOT NULL,
  user_password VARCHAR(255) NOT NULL
);
-- table admin
CREATE TABLE adminData(
	admin_id INT AUTO_INCREMENT PRIMARY KEY,
  admin_name VARCHAR(255) NOT NULL,
	NgaySinh DATE,
	GioiTinh VARCHAR(10),
  DiaChi VARCHAR(255),
  admin_phone VARCHAR(20) NOT NULL,
  admin_email VARCHAR(255) NOT NULL,
  admin_password VARCHAR(255) NOT NULL
);

-- table level test 
CREATE TABLE level_Test(
	id INT AUTO_INCREMENT PRIMARY KEY,
	level_formTest VARCHAR(20) NOT NULL
);
--  from test
CREATE TABLE formTest(
	test_id INT AUTO_INCREMENT PRIMARY KEY,
	level_test_id INT NOT NULL,
	FOREIGN KEY(level_test_id) REFERENCES level_Test(id),
  question_text TEXT,
  correct_answer TEXT,
  answer_choices_1 TEXT,
  answer_choices_2 TEXT,
  answer_choices_3 TEXT,
	answer_choices_4 TEXT
);
-- table scores
CREATE TABLE scores(
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT NOT NULL, 
	FOREIGN KEY(user_id) REFERENCES userdata(user_id), 
	score INT NOT NULL,
	level_test_id INT NOT NULL,
	FOREIGN KEY(level_test_id) REFERENCES level_Test(id)
);

-- table level Kanji
CREATE TABLE level_Kanji(
	id INT AUTO_INCREMENT PRIMARY KEY,
	level_itemKanji VARCHAR(20) NOT NULL
);
-- table item kanji
CREATE TABLE itemKanji(
	id INT AUTO_INCREMENT PRIMARY KEY,
	level_kanji_id INT NOT NULL,
	FOREIGN KEY(level_kanji_id) REFERENCES level_kanji(id),
	item VARCHAR(20) NOT NULL,
	hanTu VARCHAR(255) NOT NULL,
	kunyomi VARCHAR(255),
	onyomi VARCHAR(255),
	soNetChu INT NOT NULL,
	yNghia TEXT NOT NULL,
	imgItem VARCHAR(255) NOT NULL,
	vd_1 TEXT,
	vd_2 TEXT,
	vd_3 TEXT,
	vd_4 TEXT,
	vd_5 TEXT
);



INSERT INTO userData (user_name, NgaySinh, GioiTinh, DiaChi, user_phone, user_email, user_password)
VALUES
	('Người Dùng 1', '1990-01-01', 'Nam', '123 Đường Chính, Thành Phố', '1234567890', 'nguoidung1@gmail.com', '123456'),
	('Người Dùng 2', '1995-05-15', 'Nữ', '456 Đường Sồi, Thị Trấn', '9876543210', 'nguoidung2@gmail.com', '123456');

-- Thêm dữ liệu vào bảng adminData
INSERT INTO adminData (admin_name, NgaySinh, GioiTinh, DiaChi, admin_phone, admin_email, admin_password)
VALUES
	('Quản Trị Viên 1', '1985-08-20', 'Nam', '789 Đường Cây Đan, Xã', '5551112222', 'admin1@gmail.com', '123456'),
	('Quản Trị Viên 2', '1992-03-10', 'Nữ', '101 Đường Thông, Huyện', '5553334444', 'admin2@gmail.com', '123456');

INSERT INTO level_kanji (level_itemKanji)
VALUES
	('N1'),
	('N2'),
	('N3'),
	('N4'),
	('N5');
	
INSERT INTO itemKanji(level_kanji_id,item, hanTu,kunyomi,onyomi,soNetChu,yNghia,imgItem,vd_1,vd_2,vd_3,vd_4,vd_5) VALUES	
	(1,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(1,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(1,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(1,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(1,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(1,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(1,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(1,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(1,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(1,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(1,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(1,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(1,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(1,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(1,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(1,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(1,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(1,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(1,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(1,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(1,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(1,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(1,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(1,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(1,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(1,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(1,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(1,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(1,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(1,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(1,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(1,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(1,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(1,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(1,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(1,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(1,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(1,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(1,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(1,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(1,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(1,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(1,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(1,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(1,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(1,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(1,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(1,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(1,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(1,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(1,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(1,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(1,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(1,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(1,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(1,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(1,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(1,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(1,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(1,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(1,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(1,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(1,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(1,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(1,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(1,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(1,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(1,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(1,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(1,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(1,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(1,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(1,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(1,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(1,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(1,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(1,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(1,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(1,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(1,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(1,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(1,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(1,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(1,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(1,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(1,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(1,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(2,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(2,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(2,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(2,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(2,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(2,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(2,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(2,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(2,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(2,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(2,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(2,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(2,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(2,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(2,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(2,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(2,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(2,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(2,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(2,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(2,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(2,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(2,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(2,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(2,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(2,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(2,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(2,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(2,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(2,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(2,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(2,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(2,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(2,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(2,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(2,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(2,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(2,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(2,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(2,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(2,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(2,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(2,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(2,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(2,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(2,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(2,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(2,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(2,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(2,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(2,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(2,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(2,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(2,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(2,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(2,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(2,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(2,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(2,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(2,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(2,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(2,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(2,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(2,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(2,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(2,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(2,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(2,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(2,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(2,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(2,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(2,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(2,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(2,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(2,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(2,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(2,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(2,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(2,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(2,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(2,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(2,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(2,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(2,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(2,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(2,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(2,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(2,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(2,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(2,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(2,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(2,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(2,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(2,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(2,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(2,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(2,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(2,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(3,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(3,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(3,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(3,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(3,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(3,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(3,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(3,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(3,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(3,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(3,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(3,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(3,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(3,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(3,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(3,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(3,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(3,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(3,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(3,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(3,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(3,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(3,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(3,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(3,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(3,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(3,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(3,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(3,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(3,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(3,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(3,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(3,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(3,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(3,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(3,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(3,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(3,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(3,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(3,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(3,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(3,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(3,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(3,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(3,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(3,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(3,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(3,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(3,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(3,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(3,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(3,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(3,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(3,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(3,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(3,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(3,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(3,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(3,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(3,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(3,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(3,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(3,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(3,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(3,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(3,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(3,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(3,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(3,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(3,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(3,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(3,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(3,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(3,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(3,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(3,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(3,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(3,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(3,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(3,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(3,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(3,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(3,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(3,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(3,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(3,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(3,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(3,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(3,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(3,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(3,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(3,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(3,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(3,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(3,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(3,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(3,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(3,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(3,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(3,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(4,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(4,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(4,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(4,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(4,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(4,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(4,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(4,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(4,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(4,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(4,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(4,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(4,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(4,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(4,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(4,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(4,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(4,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(4,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(4,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(4,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(4,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(4,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(4,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(4,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(4,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(4,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(4,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(4,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(4,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(4,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(4,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(4,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(4,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(4,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(4,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(4,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(4,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(4,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(4,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(4,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(4,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(4,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(4,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(4,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(4,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(4,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(4,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(4,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(4,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(4,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(4,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(4,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(4,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(4,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(4,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(4,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(4,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(4,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(4,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(4,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(4,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(4,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(4,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(4,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(4,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(4,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(4,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(4,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(4,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(4,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(4,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(4,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(4,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(4,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(4,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(4,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(4,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(4,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(4,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(4,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(4,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(4,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(4,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(4,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(4,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(4,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(4,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(4,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(4,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(4,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(4,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(4,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(4,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(4,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(4,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(4,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(4,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(4,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(4,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(4,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(4,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(4,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(4,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(4,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(4,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(4,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(4,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(4,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(4,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(4,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(5,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(5,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(5,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),
	(5,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(5,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(5,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(5,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(5,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(5,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(5,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(5,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(5,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(5,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(5,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(5,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(5,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(5,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(5,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(5,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(5,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(5,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(5,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(5,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(5,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(5,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(5,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(5,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(5,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(5,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(5,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(5,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(5,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(5,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(5,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(5,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(5,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(5,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(5,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(5,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(5,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(5,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(5,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(5,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(5,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(5,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(5,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(5,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(5,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(5,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(5,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(5,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(5,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(5,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(5,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(5,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(5,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(5,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(5,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(5,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(5,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(5,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(5,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(5,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(5,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(5,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(5,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(5,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(5,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(5,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(5,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(5,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(5,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(5,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(5,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(5,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(5,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(5,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một',''),

	(5,'後','HẬU','のち, うし.ろ, あと, おく.れる','ゴ',9,'Sau. Con nối. Lời nói đưa đẩy. Một âm là hấu. Giản thể của chữ [后].','後.png','その後(そのご): sau đó; sau đấy','事前後(じぜんご): phụ vào; thêm vào; theo sau','今後(こんご): sau này -adv, n; trong tương lai; từ nay','以後(いご): sau đó; từ sau đó; từ sau khi',''),

	(5,'前','TIỀN','まえ','ゼン',9,'Trước. Cái trước. Sớm trước. Tiến lên.','前.png','お前(おまえ): mày','お手前(おてまえ): kỹ năng; kỹ xảo; kỹ nghệ; sự khéo tay; tài khéo léo','この前(このまえ): hồi trước; trước đây','その前(そのまえ): trước đó',''),

	(5,'生','SINH','い.きる, い.かす, い.ける, う.まれる, う.まれ, うま.れる, うま.れ, う.む, お.う, は.える, は.やす, き, なま, なま-, -なま, な.る, -な.る','セイ, ショウ',5,'Sống, đối lại với tử [死]. Còn sống. Những vật có sống. Sinh sản, nẩy nở. Nuôi, những đồ để nuôi sống đều gọi là sanh. Sống, chưa chín gọi là sanh. Chưa quen, chưa rành. Học trò. Dùng như chữ mạt [末]. Dùng làm tiếng đệm. Tiếng dùng trong tấn tuồng. Ta quen đọc là chữ sinh.','生.png','一生(いっしょう): cả đời; suốt đời; một đời; cuộc đời','一生涯(いっしょうがい): cả cuộc đời; cả đời','不衛生(ふえいせい): mất vệ sinh','中学生(ちゅうがくせい): học sinh trung học',''),

	(5,'間','GIAN','あいだ, ま','カン',12,'Chữ gian [閒], nghĩa là khoảng, thì thường viết là [間].','間.png','この間(このあいだ): độ này; gần đây; hôm nọ','一週間(いっしゅうかん): tuần lễ','世間(せけん): thế giới; xã hội','中間港(ちゅうかんこう): cảng giữa đường',''),

	(5,'上', 'THƯỢNG', 'うえ, あがり, あがる, あげる', 'ジョウ', 3, 'Trên. Ngày xưa gọi vua là Chúa thượng [主上], gọi ông vua đang đời mình là Kim thượng [今上]. Một âm là thướng. Dâng lên.', '上.png',
	'この上(このうえ): bên cạnh đó; hơn nữa; thêm vào đó; ngoài ra','その上(そのうえ): bên cạnh đó; ngoài ra; ngoài ra còn; hơn thế nữa; hơn nữa là','上がり(あがり): lên trên; tiến bộ; hoàn thành; kết thúc; thu hoạch; xuất thân; lên; bắt đầu','上がる(あがる): bốc lên; dấy; leo lên; nâng lên;',''),

	(5,'東', 'ĐÔNG', 'ひがし', 'トウ', 8,'Phương đông, tục gọi người chủ là đông. Nước Trịnh nói với người nước Sở tự xưng nước mình là đông đạo chủ [東道主] nghĩa là người chủ ở phương đông. Tục gọi các chủ cổ phần công ty là cổ đông [股東] là do nghĩa đó.  Nước Nhật Bản ở phía đông nước Tàu nên gọi là đông dương [東洋], văn tự Nhật Bản gọi là đông văn [東文].  Đông sàng [東牀] chàng rể (theo tích truyện Vương Hy Chi [王羲之], đời Tấn [晉]).','東.png','中東(ちゅうとう): Trung đông','中近東(ちゅうきんとう): Trung Cận Đông','北北東(ほくほくとう): đông bắc bắc','北東(きたひがし): Đông Bắc','南々東(なんなんとう): Nam-đông nam'),

	(5,'四', 'TỨ', 'よ - よ.つ - よっ.つ - よん', 'シ', 5,'Bốn (tên số đếm).','四.png','四つ(よっつ): bốn','四つ角(よつかど): bốn góc; ngã tư','四十(よんじゅう): bốn mươi','四国(しこく): Sikoku; Shikoku','四季(しき): bốn mùa; cả năm'),
	
	(5,'今', 'KIM', 'いま', 'コン、キン', 4,'Nay, hiện nay, bây giờ gọi là kim [今].','今.png','ただ今(ただいま): tôi đã về đây!; Xin chào','今から(いまから): từ nay','今ごろ(いまごろ): giờ này; khoảng thời gian này','今に(いまに): chẳng mấy chốc','今にも(いまにも): bất kỳ lúc nào; sớm; ngay'),

	(5,'金', 'KIM', 'かね - かな - がね', 'キン、コン', 8,'Loài kim. Phàm các vật lấy ở các mỏ mà có thể nấu chảy ra và biến hóa được hình chất đi đều gọi là kim. Như vàng, bạc, đồng, sắt, thiếc, ngày xưa gọi là ngũ kim [五金] năm loài kim. Đó là kể các thứ thường dùng đó thôi, chứ loài kim thì nhiều thứ lắm.','金.png','お金(おかね): tiền; của cải','予備金(よびきん): trữ kim','交付金(こうふきん): tiền cấp phát','代金(だいきん): giá; tiền hàng; hóa đơn; sự thanh toán','低利金(ていりきん): tiền lãi thấp'),

	(5,'九', 'CỬU', 'ここの ここの.つ', 'キュウ、ク', 2,'Chín, tên số đếm.','九.png','九つ(ここのつ): 9 cái; 9 chiếc','九十(きゅうじゅう): chín mươi','九州(きゅうしゅう): Kyushyu; đảo Kyushyu của Nhật Bản','九日(ここのか): mồng 9; ngày 9; ngày mồng 9; 9 ngày','九月(きゅうがつ): tháng chín'),

	(5,'入', 'NHẬP', 'い.る - い.る - い.り - い.れる - い.れ - はい.る', 'ニュウ、ジュ', 2,'Vào, đối lại với chữ xuất [出] ra.','入.png','ごみ入(ごみいれ): thùng rác','中入り(なかいり): Sự gián đoạn','介入(かいにゅう): sự can thiệp','仕入れ(しいれ): mua vào; sự cho vào kho; sự lưu kho; lưu kho','侵入(しんにゅう): sự xâm nhập; sự xâm lược; xâm nhập; xâm lược'),

	(5,'学', 'HỌC', 'まな.ぶ', 'ガク', 8,'Giản thể của chữ 學','学.png','中学(ちゅうがく): trung học','中学校(ちゅうがっこう): trường trung học','中学生(ちゅうがくせい): học sinh trung học','人相学(にんそうがく): Thuật xem tướng mạo; nhân tướng học','人間学(にんげんがく): Nhân chủng học'),

	(5,'高', 'CAO', 'たか.い - たか - だか - たか.まる - たか.める', 'コウ', 10,'Cao. Kiêu, đắt. Không thể với tới được gọi là cao. Cao thượng, khác hẳn thói tục. Giọng tiếng lên cao. Quý, kính. Nhiều, lớn hơn. Họ Cao.','高.png','お高い(おたかい): kiêu kỳ; kiêu căng; ngạo mạn; kiêu ngạo','じり高(じりだか): sự tăng giá dần dần','円高(えんだか): việc đồng yên lên giá','出来高(できだか): sản lượng','収穫高(しゅうかくだか): sự được mùa'),

	(5,'円', 'VIÊN', 'まる', 'エン', 4,'Viên mãn, Tiền yên Nhật.','円.png','一円(いちえん): khắp; toàn vùng; xung quanh','交換円(こうかんえん): Đồng yên dễ chuyển đổi','内接円(ないせつえん): Đường tròn nội tiếp','円い(まるい): tròn','円み(まるみ): hình tròn'),

	(5,'子', 'TỬ', 'こ', 'シ', 3,'Con, gã, tước tử, mầm giống, số lẻ, tiếng giúp lời.','子.png','お子様(おこさま): đứa bé; đứa trẻ; con (ông, bà...)','お菓子(おかし): bánh kẹo; kẹo','一子(いっし): con một','丁子(ちょうじ): Cây đinh hương','丁子油(ちょうじゆ): Dầu đinh hương'),

	(5,'外', 'NGOẠI', 'そと', 'ガイ', 5,'Ngoài, về bên ngoài, vợ gọi chồng là ngoại tử.','外.png','その外(そのほか): ngoài ra; những cái khác','並外れ(なみはずれ): Khác thường; ngoại lệ','人外(にんがい): Người bị xã hội ruồng bỏ','以外(いがい): ngoài ra; ngoài; trừ','例外(れいがい): ngoại lệ; sự ngoại lệ'),

	(5,'八', 'BÁT', 'やっつ', 'ハチ', 2,'Tám, số đếm.','八.png','お八(おやつ): bữa ăn thêm; bữa ăn qua giữa buổi; bữa phụ','お八つ(おやつ): bữa ăn nhẹ trong ngày; bữa ăn phụ; bữa ăn thêm','二八(にはち): ngày mười sáu; số mười sáu; tuổi mười sáu (tuổi thiếu nữ)','八つ(やっつ): tám','八卦(はっけ): bát quát'),

	(5,'六', 'LỤC', 'むっつ', 'ロク', 4,'Sáu, số đếm.','六.png','六つ(むっつ): sáu','六日(むいか): ngày thứ sáu','六月(ろくがつ): tháng sáu','六角(ろっかく): lục giác',
	'六面体(ろくめんたい): lục lăng'),

	(5,'下', 'HẠ', 'さげる', 'カ, ゲ', 3,'Dưới, đối lại với chữ thượng [上]. Bề dưới, nhời nói nhún mình với người trên. Một âm là há. Cuốn.','下.png',
	'お下げ(おさげ): dây buộc tóc; nơ buộc tóc; bím tóc','上下(うえした): trên và dưới; lên và xuống','下がり(さがり): sự hạ xuống; sự hạ bớt; sự giảm đi','下がる(さがる): hạ xuống; hạ bớt; giảm đi; rủ; xuống',''),

	(5,'来', 'LAİ', 'く, こ, きたる', 'ライ, タイ, タ, ラ', 7,'Giản thể của chữ 來','来.png','さ来週(さらいしゅう): tuần sau nữa','以来(いらい): kể từ đó; từ đó; sau đó','元来(がんらい): từ trước đến nay; vốn dĩ','入来(にゅうらい): Sự viếng thăm; sự đến thăm',''),

	(5,'気', 'KHÍ', 'き', 'キ, ケ', 6,'Không khí, khí chất.','気.png','お天気(おてんき): tâm trạng; trạng thái; tính tình; tâm tính; sự đồng bóng','一気に(いっきに): một lần; một hơi','上天気(じょうてんき): trời trong sáng','不安気(ふあんげ): Bồn chồn; sự lo lắng',''),

	(5,'小', 'TIỂU', 'ちい, こ, お', 'ショウ', 3,'Nhỏ.','小.png','お寝小(おねしょ): chứng đái dầm; bệnh đái dầm','中小(ちゅうしょう): vừa và nhỏ','卑小(ひしょう): Nhỏ nhặt; vụn vặt; tiểu tiết','大小(だいしょう): kích cỡ',''),

	(5,'七', 'THẤT', 'なな, ななつ, しち', 'シチ', 2,'Bảy, tên số đếm.','七.png','お七夜(おしちや): lễ đặt tên','七つ(ななつ): bảy cái','七五三(しちごさん): con số may mắn tốt lành; lễ 357','七十(ななじゅう): bảy mươi',''),

	(5,'日','NHẬT','ひ - び - か','ニチ - ジツ',4,'Mặt trời. Ngày, một ngày một đêm gọi là nhất nhật [一日]. Ban ngày. Nước Nhật, nước Nhật Bản [日本] thường gọi tắt là nước Nhật.','日.png','ある日(あるひ): bữa nọ; hôm nọ; ngày nọ','お日様(おひさま): ông mặt trời','その日(そのひ): bữa hổm; ngày đó; ngày hôm đó','一日(いちじつ): một ngày','日中(いちにちじゅう): cả ngày; suốt cả ngày'),
	
	(5,'一','NHẤT','ひと - ひと.つ','イチ - イツ',1,'Một, là số đứng đầu các số đếm. Cùng. Dùng về lời nói hoặc giả thế chăng. Bao quát hết thẩy. Chuyên môn về một mặt.','一.png','くの一	(くのいち): Ninja nữ; Ninja nữ','くノ一(くのいち): Ninja nữ; Ninja nữ','ご一新	(ごいっしん): sự phục hồi; sự trở lại','一々(いちいち): mọi thứ; từng cái một','一か月	(いっかげつ):	một tháng'),
	
	(5,'国','QUỐC','くに','コク',8,'Giản thể của chữ 國','国.png','わが国(わがくに): đất nước chúng ta','万国(ばんこく): các nước; quốc tế','万国史	(ばんこくし): Lịch sử thế giới','万国旗(ばんこくき): quốc kỳ các nước','中国(ちゅうごく):	nước Trung Quốc; tên một hòn đảo phía Tây Nam Nhật Bản.'),
	
	(5,'人','NHÂN','ひと - り - と','ジン ニン',2,'Người, giống khôn nhất trong loài động vật. Tiếng đối lại với mình.','人.png','あの人(あのひと): người ấy; người đó; ông ấy; bà ấy; chị ấy; anh ấy; ông ta; bà ta; anh ta; chị ta','この人(このひと): người này','ご主人	(ごしゅじん): chồng (của người khác)','ご家人(ごけにん): người nô lệ tầng lớp thấp cổ bé họng thời kỳ Kamakura và Edo','どの人(ちゅうごく):	người nào'),
	
	(5,'年','NIÊN','とし','ネン',6,'Năm. Tuổi. Người đỗ cùng khoa gọi là đồng niên [同年]. Được mùa.','年.png','お年玉(おとしだま): tiền mừng tuổi năm mới','一万年(いちまんねん): vạn niên','一年(いちねん): một năm','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一昨年(いっさくねん): năm kia'),
	
	(5,'大','ĐẠI','おお - おお.きい - おお.いに','ダイ タイ',3,'Lớn. Tiếng nói gộp. Tiếng nói tôn trọng người. Cho là to. Hơn. Một âm là thái.','大.png','ばく大(ばくだい): khổng lồ; rộng lớn; mênh mông','五大州(ごだいしゅう): năm châu','偉大(いだい): sự vĩ đại; to lớn; xuất chúng','偉大な(いだいな): vĩ đại','党大会(とうたいかい): hội nghị Đảng'),
	
	(5,'十','THẬP','とお','ジュウ',2,'Mười. Đủ hết.','十.png','七十(ななじゅう): bảy mươi','七十一(ななじゅういち): bày mốt','不十分(ふじゅうぶん): không đầy đủ; không hoàn toàn; sự không đầy đủ; sự không hoàn toàn','九十(きゅうじゅう): chín mươi','二十(にじゅう): Hai mươi'),
	
	(5,'二','NHỊ','ふた','ジ, ニ',2,'Hai, tên số đếm.','二.png','中二階(ちゅうにかい): Gác lửng; tầng lửng','二けた(ふたけた): hai con số; hai chữ số','二つ(ふたつ): hai','二つ繭(ふたつまゆ): tổ kén đôi','二の丸(にのまる): Thành lũy bao quanh thành (lâu đài)'),
	
	(5,'本','BỔN','もと','ホン',5,'Gốc, một cây gọi là nhất bổn [一本]. Của mình, bổn thân [本身] thân mình, bổn quốc [本國] nước mình, bổn vị [本位] cái địa vị của mình, bổn lĩnh [本領] cái năng lực của mình, không phải cầu gì ở ngoài, v.v.','本.png','いい本(いいほん): sách hay','不本意(ふほんい): không tình nguyện; không tự nguyện; miễn cưỡng; bất đắc dĩ; sự không tình nguyện; sự không tự nguyện; sự miễn cưỡng; sự bất đắc dĩ','二本棒(にほんぼう): Anh ngốc; xỏ mũi người chồng; người hay than vãn','人情本(にんじょうぼん): Một thể loại tiểu thuyết tình cảm thịnh hành vào khoảng thời Văn Chính (1818-1830) đến đầu thời Minh Trị (1868-1912)','写本(しゃほん): bản viết'),
	
	(5,'中','TRUNG','なか','チュウ',4,'Giữa, chỉ vào bộ vị trong vật thể. Trong. Ngay, không vẹo không lệch, không quá không thiếu, cùng âm nghĩa như chữ trọng [仲].','中.png','お中元(おちゅうげん): tết Trung nguyên','アル中(アルちゅう): sự nghiện rượu; nghiện rượu','一年中(いちねんじゅう): trong suốt một năm; quanh năm; suốt năm','一日中(いちにちじゅう): cả ngày; suốt cả ngày','一晩中(ひとばんじゅう): cả đêm; suốt cả đêm'),
	
	(5,'長','TRƯỞNG','なが.い, おさ','チョウ',8,'Dài. Lâu dài. Xa. Thường. Hay, tài. Một âm là trưởng. Tuổi cao hơn, có tuổi hơn. Những bậc trên mình mà có tuổi gọi là trưởng lão [長老]. Hàng thứ nhất. Đứng đầu. Lớn lên, trái lại với tiêu mòn. Lại một âm là trướng.','長.png','中波長(ちゅうはちょう): bước sóng vừa','中長期(ちゅうちょうき): trung kỳ; vừa và dài hạn','会長(かいちょう): chủ tịch (công ty, một tổ chức); hội trưởng','低成長(ていせいちょう): sự tăng trưởng thấp',''),

	(5,'出','XUẤT','で.る, -で, だ.す, い.でる, -い.でる, い.だす','シュツ',5,'Ra ngoài, đối lại với chữ nhập [入] vào. Mở ra. Bỏ, đuổi. Sinh ra. Phàm cái gì tự không mà ra có thì gọi là xuất. Hiện ra. Hơn. Tiêu ra. Một âm là xúy.','出.png','お出で(おいで): lại đây','人出(ひとで): đám đông; số người có mặt; số người hiện diện','供出(きょうしゅつ): sự cấp phát','傑出(けっしゅつ): sự kiệt xuất; sự xuất chúng; sự giỏi hơn người',''),

	(5,'三','TAM','み, み.つ, みっ.つ','サン',3,'Ba, tên số đếm. Một âm là tám.','三.png','お三時(おさんじ): bữa phụ lúc 3 giờ','七五三(しちごさん): con số may mắn tốt lành; lễ 357','三つ(みっつ): ba','三つ葉(みつば): ngò',''),

	(5,'時','THỜI','とき','ジ',10,'Mùa. Thì. Giờ, một ngày chia 12 giờ, mỗi giờ gọi tên một chi. Thường. Đúng thời, đang thời. Cơ hội.',
	'時.png','あの時(あのとき): bấy giờ; lúc ấy','ある時(あるとき): có khi','お三時(おさんじ): bữa phụ lúc 3 giờ','一時(いちじ): một giờ; thời khắc; tạm thời; nhất thời',''),

	(5,'行','HÀNH','い.く - ゆ.く -  ゆ.き - ゆき - い.き - いき - おこ - な.う - おこ.なう','コウ, ギョウ, アン',6,'Bước đi, bước chân đi. Làm ra, thi hành ra. Đi. Không định hẳn, tạm thì. Cái để dùng, của dùng. Trải qua. Sắp tới, dần đến. Bài hát.','行.png','と行く(といく): đi với','一行(いちぎょう): một hàng; một dòng',
	'不行儀(ふぎょうぎ): thái độ xấu; sự vô lễ','不行状(ふぎょうじょう): trác táng',''),

	(5,'見','KIẾN','み.る, み.える, み.せる','ケン',7,'Thấy, mắt trông thấy. Ý biết, như kiến địa [見地] chỗ biết tới, kiến giải [見解] chỗ hiểu biết, v. Yết kiến. Bị. Một âm là hiện. Tiến cử. Cái trang sức ngoài áo quan.','見.png','お花見(おはなみ): ngắm hoa anh đào; xem hoa nở','お見舞(おみまい): thăm người ốm','よそ見(よそみ): sự nhìn ngang; sự nhìn tránh đi; sự nhìn ra chỗ khác','一見(いっけん): nhìn; nhìn một lần; thấy; thấy một lần; xem; xem một lần',''),

	(5,'月','NGUYỆT','つき','ゲツ, ガツ',4,'Mặt trăng. Tháng.','月.png','お正月(おしょうがつ): tết','一か月(いっかげつ): một tháng','一ヶ月(いっかげつ): một tháng',
	'一月(いちがつ): tháng giêng -adv; tháng Một','');

-- Insert data into level_Test table
INSERT INTO level_Test (level_formTest)
VALUES 
	('N1'),
	('N2'),
	('N3'),
	('N4'),
	('N5');
			
-- Insert data into formTest table
INSERT INTO formTest (level_test_id,question_text, correct_answer, answer_choices_1, answer_choices_2, answer_choices_3, answer_choices_4)
VALUES 
	(1,'かのじょの　でんわ番号を　知っています。','１．ばんごう', '１．ばんごう', '２．ばんこう', '３．ばいこう', '４．ばいごう'),
	(1,'あには　わたしに　ちゅうごくごの　辞書を　くれました。', '２．じっしょ', '１．しじょ', '２．じっしょ', '３．じしょ', '４．しっしょ'),
	(1,'食堂は　としょかんの　となりに　あります。', '３．しゅくどう', '１．しょくとう', '２．しょくどう', '３．しゅくどう', '４．しゅくとう'),
	(1,'きょうしつの　掃除は　まだ　はんぶんしか　おわっていません。', '４． そうじ', '１．そおじ', '２．そうじょ', '３．そおじょ', '４． そうじ'),
	(1,'こどもは　頭が　いたいと　いいました。', '１．とう', '１．とう', '２．どう', '３．あたま', '４．あだま'),
	(1,'くがつ　二十日に　ともだちに　あいます。', '２．はつか', '１．はつにち', '２．はつか', '３．にじゅうにち', '４．にじゅうか'),
	(1,'くるまの　うしろに　何が　ありますか。', '３．なに', '１．なん', '２．ない', '３．なに', '４．なか'),
	(1,'ここは　たばこを　吸ってはいけません。', '４．ちって', '１．すうって', '２．すって', '３．ちいって', '４．ちって'),
	(1,'あのひとは　冷たい　めで　わたしを　みています。', '１．さむたい', '１．さむたい', '２．つめたい', '３．いたい', '４．あたたい'),
	(1,'たなかさんは　来月　ちゅうごくへ　いきます。', '２．れいげつ', '１．れいつき', '２．れいげつ', '３．らいつき　　', '４．らいげつ'),
	
	(2,'かのじょの　でんわ番号を　知っています。','１．ばんごう', '１．ばんごう', '２．ばんこう', '３．ばいこう', '４．ばいごう'),
	(2,'あには　わたしに　ちゅうごくごの　辞書を　くれました。', '２．じっしょ', '１．しじょ', '２．じっしょ', '３．じしょ', '４．しっしょ'),
	(2,'食堂は　としょかんの　となりに　あります。', '３．しゅくどう', '１．しょくとう', '２．しょくどう', '３．しゅくどう', '４．しゅくとう'),
	(2,'きょうしつの　掃除は　まだ　はんぶんしか　おわっていません。', '４． そうじ', '１．そおじ', '２．そうじょ', '３．そおじょ', '４． そうじ'),
	(2,'こどもは　頭が　いたいと　いいました。', '１．とう', '１．とう', '２．どう', '３．あたま', '４．あだま'),
	(2,'くがつ　二十日に　ともだちに　あいます。', '２．はつか', '１．はつにち', '２．はつか', '３．にじゅうにち', '４．にじゅうか'),
	(2,'くるまの　うしろに　何が　ありますか。', '３．なに', '１．なん', '２．ない', '３．なに', '４．なか'),
	(2,'ここは　たばこを　吸ってはいけません。', '４．ちって', '１．すうって', '２．すって', '３．ちいって', '４．ちって'),
	(2,'あのひとは　冷たい　めで　わたしを　みています。', '１．さむたい', '１．さむたい', '２．つめたい', '３．いたい', '４．あたたい'),
	(2,'たなかさんは　来月　ちゅうごくへ　いきます。', '２．れいげつ', '１．れいつき', '２．れいげつ', '３．らいつき　　', '４．らいげつ'),
	
	(3,'かのじょの　でんわ番号を　知っています。','１．ばんごう', '１．ばんごう', '２．ばんこう', '３．ばいこう', '４．ばいごう'),
	(3,'あには　わたしに　ちゅうごくごの　辞書を　くれました。', '２．じっしょ', '１．しじょ', '２．じっしょ', '３．じしょ', '４．しっしょ'),
	(3,'食堂は　としょかんの　となりに　あります。', '３．しゅくどう', '１．しょくとう', '２．しょくどう', '３．しゅくどう', '４．しゅくとう'),
	(3,'きょうしつの　掃除は　まだ　はんぶんしか　おわっていません。', '４． そうじ', '１．そおじ', '２．そうじょ', '３．そおじょ', '４． そうじ'),
	(3,'こどもは　頭が　いたいと　いいました。', '１．とう', '１．とう', '２．どう', '３．あたま', '４．あだま'),
	(3,'くがつ　二十日に　ともだちに　あいます。', '２．はつか', '１．はつにち', '２．はつか', '３．にじゅうにち', '４．にじゅうか'),
	(3,'くるまの　うしろに　何が　ありますか。', '３．なに', '１．なん', '２．ない', '３．なに', '４．なか'),
	(3,'ここは　たばこを　吸ってはいけません。', '４．ちって', '１．すうって', '２．すって', '３．ちいって', '４．ちって'),
	(3,'あのひとは　冷たい　めで　わたしを　みています。', '１．さむたい', '１．さむたい', '２．つめたい', '３．いたい', '４．あたたい'),
	(3,'たなかさんは　来月　ちゅうごくへ　いきます。', '２．れいげつ', '１．れいつき', '２．れいげつ', '３．らいつき　　', '４．らいげつ'),
	
	(4,'かのじょの　でんわ番号を　知っています。','１．ばんごう', '１．ばんごう', '２．ばんこう', '３．ばいこう', '４．ばいごう'),
	(4,'あには　わたしに　ちゅうごくごの　辞書を　くれました。', '２．じっしょ', '１．しじょ', '２．じっしょ', '３．じしょ', '４．しっしょ'),
	(4,'食堂は　としょかんの　となりに　あります。', '３．しゅくどう', '１．しょくとう', '２．しょくどう', '３．しゅくどう', '４．しゅくとう'),
	(4,'きょうしつの　掃除は　まだ　はんぶんしか　おわっていません。', '４． そうじ', '１．そおじ', '２．そうじょ', '３．そおじょ', '４． そうじ'),
	(4,'こどもは　頭が　いたいと　いいました。', '１．とう', '１．とう', '２．どう', '３．あたま', '４．あだま'),
	(4,'くがつ　二十日に　ともだちに　あいます。', '２．はつか', '１．はつにち', '２．はつか', '３．にじゅうにち', '４．にじゅうか'),
	(4,'くるまの　うしろに　何が　ありますか。', '３．なに', '１．なん', '２．ない', '３．なに', '４．なか'),
	(4,'ここは　たばこを　吸ってはいけません。', '４．ちって', '１．すうって', '２．すって', '３．ちいって', '４．ちって'),
	(4,'あのひとは　冷たい　めで　わたしを　みています。', '１．さむたい', '１．さむたい', '２．つめたい', '３．いたい', '４．あたたい'),
	(4,'たなかさんは　来月　ちゅうごくへ　いきます。', '２．れいげつ', '１．れいつき', '２．れいげつ', '３．らいつき　　', '４．らいげつ'),
	
	(5,'かのじょの　でんわ番号を　知っています。','１．ばんごう', '１．ばんごう', '２．ばんこう', '３．ばいこう', '４．ばいごう'),
	(5,'あには　わたしに　ちゅうごくごの　辞書を　くれました。', '２．じっしょ', '１．しじょ', '２．じっしょ', '３．じしょ', '４．しっしょ'),
	(5,'食堂は　としょかんの　となりに　あります。', '３．しゅくどう', '１．しょくとう', '２．しょくどう', '３．しゅくどう', '４．しゅくとう'),
	(5,'きょうしつの　掃除は　まだ　はんぶんしか　おわっていません。', '４． そうじ', '１．そおじ', '２．そうじょ', '３．そおじょ', '４． そうじ'),
	(5,'こどもは　頭が　いたいと　いいました。', '１．とう', '１．とう', '２．どう', '３．あたま', '４．あだま'),
	(5,'くがつ　二十日に　ともだちに　あいます。', '２．はつか', '１．はつにち', '２．はつか', '３．にじゅうにち', '４．にじゅうか'),
	(5,'くるまの　うしろに　何が　ありますか。', '３．なに', '１．なん', '２．ない', '３．なに', '４．なか'),
	(5,'ここは　たばこを　吸ってはいけません。', '４．ちって', '１．すうって', '２．すって', '３．ちいって', '４．ちって'),
	(5,'あのひとは　冷たい　めで　わたしを　みています。', '１．さむたい', '１．さむたい', '２．つめたい', '３．いたい', '４．あたたい'),
	(5,'たなかさんは　来月　ちゅうごくへ　いきます。', '２．れいげつ', '１．れいつき', '２．れいげつ', '３．らいつき　　', '４．らいげつ');
