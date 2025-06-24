<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak TravelKu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f0f7ff, #e6f2ff);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #333;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            color: #02a7c5;
            font-weight: 700;
        }
        
        .header p {
            font-size: 1.2rem;
            color: #4a6b7c;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .icon-container {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 48px;
        }
        
        .email-icon {
            background: linear-gradient(135deg, #e96b5d, #c0392b);
            color: white;
        }
        
        .whatsapp-icon {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
        }
        
        .contact-card h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #0a5c36;
        }
        
        .contact-info {
            font-size: 1.4rem;
            margin-bottom: 30px;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .btn {
            display: inline-block;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .email-btn {
            background: linear-gradient(to right, #e96b5d, #c0392b);
            color: white;
        }
        
        .whatsapp-btn {
            background: linear-gradient(to right, #25D366, #128C7E);
            color: white;
        }
        
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        
        .btn i {
            margin-right: 10px;
        }
        
        .additional-info {
            background: white;
            border-radius: 20px;
            padding: 30px;
            width: 100%;
            max-width: 700px;
            margin: 20px auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }
        
        .info-item {
            text-align: center;
            padding: 25px 15px;
            border-radius: 15px;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }
        
        .info-item:hover {
            background: #e6f4ea;
        }
        
        .info-item i {
            font-size: 2.5rem;
            color: #0a5c36;
            margin-bottom: 15px;
        }
        
        .info-item h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .info-item p {
            font-size: 1rem;
            color: #4a6b7c;
        }
        
        footer {
            text-align: center;
            padding: 30px 0 10px;
            width: 100%;
            margin-top: 20px;
            color: #4a6b7c;
            font-size: 1rem;
        }
        
        .footer-links {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .footer-links a {
            color: #0a5c36;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #25D366;
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }
            
            .header p {
                font-size: 1rem;
            }
            
            .contact-card {
                padding: 30px 20px;
            }
            
            .icon-container {
                width: 80px;
                height: 80px;
                font-size: 36px;
            }
            
            .contact-card h2 {
                font-size: 1.5rem;
            }
            
            .contact-info {
                font-size: 1.2rem;
            }
            
            .btn {
                padding: 14px 25px;
                font-size: 1rem;
            }
            
            .additional-info {
                padding: 25px 20px;
            }
        }
        
        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8rem;
            }
            
            .contact-card {
                padding: 25px 15px;
            }
            
            .icon-container {
                width: 70px;
                height: 70px;
                font-size: 32px;
            }
            
            .contact-info {
                font-size: 1.1rem;
            }
            
            .btn {
                width: 100%;
                padding: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>TravelKu</h1>
            <p>Hubungi kami untuk informasi lebih lanjut tentang layanan kami</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-card">
                <div class="icon-container email-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h2>Kirim Email</h2>
                <p class="contact-info">rama0346@gmail.com</p>
                <a href="mailto:rama0346@gmail.com" class="btn email-btn">
                    <i class="fas fa-paper-plane"></i> Kirim Email
                </a>
            </div>
            
            <div class="contact-card">
                <div class="icon-container whatsapp-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h2>WhatsApp</h2>
                <p class="contact-info">+62 818-0356-4578</p>
                <a href="https://wa.me/6281803564578" class="btn whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> Chat via WhatsApp
                </a>
            </div>
        </div>
        
    
    
    <script>
        // Animasi sederhana untuk tombol
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
        
        // Animasi untuk elemen ketika muncul di layar
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.contact-card, .info-item');
            
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            });
            
            setTimeout(() => {
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 200 * index);
                });
            }, 300);
        });
    </script>
</body>
</html>