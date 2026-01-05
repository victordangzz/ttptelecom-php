<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
  <title>404</title>
  <meta name="keywords" content="404">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="<?= $configBase ?>assets/404_files/style.css" />
</head>

<body>
  <div class="nf-wrap">
    <div class="nf-hero">
      <h1 class="nf-code">404</h1>
    </div>

    <div class="nf-icon-row">
      <div class="nf-icon-badge" aria-hidden="true">
        <!-- Wrench icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
          viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="nf-icon">
          <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
        </svg>
      </div>
    </div>

    <h2 class="nf-title">Trang hiện không tồn tại</h2>
    <p class="nf-desc">
      Trang bạn đang tìm kiếm không tồn tại, bị xóa hoặc tạm thời không khả dụng.
    </p>

    <div class="nf-actions">
      <a class="nf-btn nf-btn--primary" href="<?= $configBase ?>">
        <!-- House icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
          viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="nf-btn-ic">
          <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
          <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
        </svg>
        Trở lại trang chủ
      </a>

      <button class="nf-btn nf-btn--outline" type="button" onclick="history.back()">
        <!-- Arrow-left icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
          viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="nf-btn-ic">
          <path d="m12 19-7-7 7-7"></path>
          <path d="M19 12H5"></path>
        </svg>
        Quay lại
      </button>
    </div>

    <div class="nf-support">
      <p class="nf-support-title">Cần hỗ trợ? Liên hệ với chúng tôi:</p>

      <div class="nf-support-links">
        <a class="nf-support-link" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">📞 <?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?></a>
        <a class="nf-support-link" href="mailto:<?= $optsetting['email'] ?>">✉️ <?= $optsetting['email'] ?></a>
      </div>
    </div>
  </div>
  <style>
    body {
      font-family: ui-sans-serif, system-ui;;
    }
    .nf-wrap {
      display: flex;
      max-width: 672px;
      margin: 0 auto;
      text-align: center;
      padding: 0 16px;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: fit-content;
      height: 100vh;
    }

    .nf-hero {
      margin-bottom: 32px;        
    }

    .nf-code {
      font-weight: 800;
      color: #e5e7eb;            
      line-height: 1;          
      user-select: none; 
      margin: 0;
      font-size: 180px; 
    }

    @media (min-width: 768px) {
      .nf-code {
        font-size: 240px;
      }
    }
    .nf-icon-row {
      display: flex;
      justify-content: center;
      margin-bottom: 24px;    
    }

    .nf-icon-badge {
      width: 80px;            
      height: 80px;          
      border-radius: 9999px;    
      background: #dcfce7; 
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .nf-icon {
      color: #16a34a;
    }
    .nf-title {
      font-size: 30px;
      line-height: 1.2;
      margin: 0 0 16px 0;    
      color: #111827;  
      font-weight: 700;
    }
    @media (min-width: 768px) {
      .nf-title {
        font-size: 36px;
      }
    }
    .nf-desc {
      font-size: 18px;
      line-height: 1.7;
      color: #4b5563; 
      margin: 0 auto 32px; 
      max-width: 448px;
    }
    .nf-actions {
      display: flex;
      flex-direction: column;
      gap: 16px;
      justify-content: center;
      align-items: center;
    }

    @media (min-width: 640px) {
      .nf-actions {
        flex-direction: row;
      }
    }
    .nf-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      border-radius: 6px;
      font-weight: 600;
      font-size: 18px;
      padding: 10px 32px; 
      text-decoration: none;
      border: 2px solid transparent;
      cursor: pointer;
      transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease, border-color 0.2s ease;
    }
    .nf-btn:active {
      transform: translateY(0);
    }
    .nf-btn-ic {
      flex: 0 0 auto;
    }
    .nf-btn--primary {
      background: #16a34a;
      color: #ffffff;
    }

    .nf-btn--primary:hover {
      background: #15803d;
      transform: translateY(-1px);
    }
    .nf-btn--outline {
      background: transparent;
      border-color: #16a34a;
      color: #16a34a;
    }

    .nf-btn--outline:hover {
      background: #f0fdf4;
      transform: translateY(-1px);
    }
    .nf-support {
      margin-top: 48px;
      padding-top: 32px;
      border-top: 1px solid #e5e7eb; 
    }

    .nf-support-title {
      color: #4b5563; 
      margin: 0 0 16px 0; 
    }

    .nf-support-links {
      display: flex;
      flex-direction: column;
      gap: 16px;
      justify-content: center;
      font-size: 14px; 
    }

    @media (min-width: 640px) {
      .nf-support-links {
        flex-direction: row;
      }
    }

    .nf-support-link {
      color: #16a34a;   
      font-weight: 600;
      text-decoration: none;
    }

    .nf-support-link:hover {
      color: #15803d; 
    }
  </style>
</body>

</html>