<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Deskripsi Kandidat</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #d0d7de;
  }

  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 180px;
    height: 100%;
    background-color: #3d5370;
    color: #fff;
    display: flex;
    flex-direction: column;
    padding: 20px;
  }

  .logo {
    margin-bottom: 20px;
  }

  .logo img {
    width: 100%;
  }

  .menu {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .menu a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
    background-color: #3d5370;
    border-radius: 4px;
  }

  .menu a:hover {
    background-color: #2a3d58;
  }

  .main {
    margin-left: 200px;
    padding: 20px;
  }

  h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
  }

  .card {
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 8px;
  display: flex;
  gap: 20px;
  max-width: 900px;
  margin: 20px auto;
  align-items: flex-start; 
}

  .photo {
    flex: 1;
  }

  .photo img {
  display: block;
  margin: 0 auto;
  width: 150px; 
  height: auto;
  border-radius: 8px;
  }

  .info {
    flex: 2;
  }

  .name {
    font-weight: bold;
    font-size: 18px;
  }

  .periode {
    font-size: 14px;
    color: #555;
    margin-bottom: 15px;
  }

  .section {
    margin-bottom: 15px;
  }

  .section h3 {
    margin: 0 0 8px 0;
    font-size: 16px;
    font-weight: bold;
  }

  .visi {
    font-style: italic;
  }

  .misi {
    padding-left: 15px;
  }

  .buttons {
    display: flex;
    gap: 10px;
    margin-top: 20px;
  }

  .btn {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
  }

  .vote {
    background-color: #2d4b9c;
    color: #fff;
  }

  .vote svg {
    margin-right: 8px;
  }

  .kembali {
    background-color: #ccc;
    color: #000;
  }

  .kembali svg {
    margin-right: 8px;
  }

  .logout {
    position: fixed;
    bottom: 20px;
    left: 20px;
    font-size: 14px;
    cursor: pointer;
    display: flex;
    align-items: center;
  }

  .logout svg {
    margin-right: 8px;
  }

</style>
</head>
<body>
<<<<<<< HEAD
  <div class="sidebar">
    <div class="logo">
      <img src="logo.png" alt="Logo Sistem Pemilihan Kepala Desa" />
    </div>
    <div class="menu">
      <a href="#">VOTING</a>
      <a href="#">HASIL VOTING</a>
    </div>
  </div>
  
  <div class="main">
    <h1>DESKRIPSI KANDIDAT 2</h1>
    
    <div class="card">
      <div class="photo">
        <img src="images/bagas" alt="Bagas"/>
</div>

      <div class="info">
        <div class="name">BAGAS</div>
        <div class="periode">Calon Kepala Desa 2026-2031</div>
        
        <div class="section">
          <h3>Visi:</h3>
          <p class="visi">Mewujudkan desa yang maju, mandiri, sejahtera, dan harmonis melalui pelayanan yang adil, transparan, dan berkelanjutan.</p>
        </div>
        
        <div class="section">
          <h3>Misi:</h3>
          <ol class="misi">
            <li>Meningkatkan pelayanan publik yang cepat dan transparan.</li>
            <li>Mengembangkan potensi desa dan ekonomi masyarakat.</li>
            <li>Membangun infrastruktur desa secara merata.</li>
            <li>Meningkatkan kesejahteraan dan partisipasi masyarakat.</li>
            <li>Menjaga keamanan, budaya, dan kerukunan warga.</li>
          </ol>
        </div>
        
        <div class="buttons">
          <a href="#" class="btn vote">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 12c-2.21 0-4-1.79-4-4V4h2v4c0 1.1.9 2 2 2s2-.9 2-2V4h2v4c0 2.21-1.79 4-4 4z"/>
            </svg>
            vote sekarang
          </a>
          
          <a href="#" class="btn kembali">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
            </svg>
            kembali
          </a>
        </div>
      </div>
    </div>
  
    <div class="logout">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path d="M6 12v-1h4v1H6zm0-3v-1h4v1H6zm0-3v-1h4v1H6z"/>
        <path fill-rule="evenodd" d="M11 4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6zm0 1H5v6h6V5z"/>
        <path d="M12 8l-3 3v-2H4v-2h5V5l3 3z"/>
      </svg>
      LOG OUT
    </div>
  </div>
=======
       
>>>>>>> b550ea684e70b8f0e2060bb4197425256ab3e8ed
</body>
</html>