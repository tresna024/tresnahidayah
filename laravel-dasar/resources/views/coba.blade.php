<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrama Internasional</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .image-container {
            position: relative;
            width: 500px;
            height: 300px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .arrow-left {
            left: 10px;
        }

        .arrow-right {
            right: 10px;
        }

        .description {
            width: 400px;
        }

        .description h2 {
            margin-bottom: 10px;
        }

        .description p {
            line-height: 1.5;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h1 class="title">Asrama Internasional</h1>
        </div>
        <div class="image-container">
            <img src="style/img/bu-susi-p.jpg" alt="Asrama Internasional" class="image">
            <img src="style/img/galeri-1.jpg" alt="Asrama Internasional" class="image">
            <div class="arrow arrow-left" onclick="prevImage()">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="arrow arrow-right" onclick="nextImage()">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        <div class="description">
            <h2>Deskripsi:</h2>
            <p>Asrama Mahasiswa Asing (Internasional) adalah asrama mahasiswa putra yang diperuntukkan bagi mahasiswa
                asing non regular. Memiliki 1 gedung utama berlantai 2 dan terdapat 23 kamar untuk 2 orang di setiap
                kamarnya.</p>
            <p>Fasilitas di setiap kamar berupa kasur busa dan tempat tidur, lemari pakaian, meja dan kursi. Sedangkan
                fasilitas umum berupa wifi, kamar mandi dan tempat cuci bersama, area menjemur pakaian, ruang tv, ruang
                diskusi, dapur, dan parkir.</p>
        </div>
    </div>

    <script>
        let images = [
            "style/img/bu-susi-p.jpg",
            "style/img/galeri-1.jpg"
        ];

        let currentImageIndex = 0;

        function prevImage() {
            currentImageIndex--;
            if (currentImageIndex < 0) {
                currentImageIndex = images.length - 1;
            }
            document.querySelector(".image").src = images[currentImageIndex];
        }

        function nextImage() {
            currentImageIndex++;
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
            }
            document.querySelector(".image").src = images[currentImageIndex];
        }
    </script>
</body>

</html>
