<!DOCTYPE html>
<html>
<head>
    <title>Employee Self Service</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background: #f0f2f5;
        }
        .container {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #333; margin-bottom: 30px; }
        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }
        button {
            padding: 15px 25px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: #4CAF50;
            color: white;
            transition: 0.3s;
        }
        button:hover { opacity: 0.8; transform: scale(1.05); }
        .info {
            margin-top: 30px;
            padding: 15px;
            background: #e3f2fd;
            border-radius: 5px;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>👤 Employee Self Service</h2>
        
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        
        <div class="btn-group">
            <form method="POST" action="{{ url('/ess/absen') }}">
                @csrf
                <input type="hidden" name="type" value="masuk">
                <button type="submit">✅ Masuk</button>
            </form>
            
            <form method="POST" action="{{ url('/ess/absen') }}">
                @csrf
                <input type="hidden" name="type" value="istirahat">
                <button type="submit">🍜 Istirahat</button>
            </form>
            
            <form method="POST" action="{{ url('/ess/absen') }}">
                @csrf
                <input type="hidden" name="type" value="kembali">
                <button type="submit">🔄 Kembali</button>
            </form>
            
            <form method="POST" action="{{ url('/ess/absen') }}">
                @csrf
                <input type="hidden" name="type" value="pulang">
                <button type="submit">🏠 Pulang</button>
            </form>
        </div>
        
        <div class="info">
            <p>📅 {{ date('d-m-Y') }} | 🕒 {{ date('H:i:s') }}</p>
            <p>Selamat bekerja, Karyawan!</p>
        </div>
    </div>
</body>
</html>