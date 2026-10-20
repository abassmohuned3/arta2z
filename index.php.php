<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art A2Z Design | م. محمد عباس</title>
    <link rel="stylesheet" href="style.css">
    <!-- إضافة أيقونات FontAwesome لشكل احترافي -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!-- الهيدر والقائمة -->
    <header>
        <nav>
            <div class="logo">Art <span>A2Z</span> Design</div>
            <ul class="nav-links">
                <li><a href="#home">الرئيسية</a></li>
                <li><a href="#services">خدماتنا</a></li>
                <li><a href="#portfolio">أعمالنا</a></li>
                <li><a href="#contact">تواصل معنا</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <!-- القسم الرئيسي -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>م. محمد عباس</h1>
            <p>نحول خيالك إلى واقع ملموس.. تصاميم داخلية وخارجية تجمع بين الفخامة والحداثة.</p>
            <a href="#portfolio" class="btn">مشاهدة أعمالي</a>
        </div>
    </section>

    <!-- قسم الخدمات -->
    <section id="services" class="services">
        <h2 class="section-title">خدماتنا</h2>
        <div class="services-container">
            <div class="service-box">
                <i class="fas fa-pencil-ruler"></i>
                <h3>تصميم داخلي</h3>
                <p>استغلال مثالي للمساحات مع توزيع أثاث عصري وألوان متناسقة.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-home"></i>
                <h3>تصميم خارجي</h3>
                <p>واجهات معمارية تعكس الفخامة والتميز وتواكب أحدث الصيحات.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-couch"></i>
                <h3>تأثيث وديكور</h3>
                <p>اختيار أجود الخامات وأرقى قطع الأثاث التي تناسب ذوقك.</p>
            </div>
        </div>
    </section>

    <!-- قسم الأعمال (معرض صور بسيط) -->
    <section id="portfolio" class="portfolio">
        <h2 class="section-title">معرض الأعمال</h2>
        <div class="gallery">
            <div class="project"><img src="https://via.placeholder.com/300x200" alt="مشروع 1"></div>
            <div class="project"><img src="https://via.placeholder.com/300x200" alt="مشروع 2"></div>
            <div class="project"><img src="https://via.placeholder.com/300x200" alt="مشروع 3"></div>
            <div class="project"><img src="https://via.placeholder.com/300x200" alt="مشروع 4"></div>
        </div>
    </section>

    <!-- قسم التواصل (PHP) -->
    <section id="contact" class="contact">
        <h2 class="section-title">تواصل معنا</h2>
        <div class="contact-wrapper">
            <form action="index.php" method="POST" class="contact-form">
                <input type="text" name="name" placeholder="الاسم الكامل" required>
                <input type="email" name="email" placeholder="البريد الإلكتروني" required>
                <textarea name="message" placeholder="اشرح لنا تفاصيل مشروعك..." required></textarea>
                <button type="submit" name="submit" class="btn">إرسال الطلب</button>
            </form>
            
            <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                
                // هنا يتم وضع كود إرسال الإيميل، ولكن للتبسيط سنظهر رسالة نجاح
                echo "<p class='success-msg'>شكراً يا $name، تم استلام رسالتك وسيتواصل معك م. محمد عباس قريباً!</p>";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>جميع الحقوق محفوظة &copy; 2026 | Art A2Z Design - م. محمد عباس</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
