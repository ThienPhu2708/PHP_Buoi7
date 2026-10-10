<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f2f2f0;
        }

        nav {
            display: flex;
            gap: 20px;
            padding: 14px 24px;
            background: #4a5560;
            border-bottom: 2px solid #343c44;
        }

        nav a { text-decoration: none; }
        nav a:hover { text-decoration: underline; }

        .container {
            max-width: 900px;
            margin: 24px auto;
            padding: 20px 24px;
            background: #fff;
            border: 1px solid #c8c8c4;
            border-radius: 6px;
        }

        h2 {
            margin-top: 0;
            padding-bottom: 8px;
            border-bottom: 1px solid #d6d6d2;
        }

        .flash {
            margin-bottom: 16px;
            padding: 10px 14px;
            background: #e8eee8;
            border: 1px solid #b5c4b5;
            border-left: 4px solid #7f9a7f;
            border-radius: 4px;
            color: #3d4f3d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #c8c8c4;
        }

        th, td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #d6d6d2;
        }

        th { background: #e9e9e6; }
        tbody tr:nth-child(even) { background: #f8f8f6; }

        a { color: #4a5f78; }

        input, textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #b8b8b4;
            border-radius: 4px;
            font: inherit;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #6b7a88;
        }

        button {
            padding: 6px 14px;
            background: #e9e9e6;
            border: 1px solid #aaa9a4;
            border-radius: 4px;
            color: #333;
            cursor: pointer;
            font: inherit;
        }

        button:hover { background: #dcdcd8; }

        footer {
            max-width: 900px;
            margin: 0 auto 24px;
            padding: 0 24px;
            text-align: center;
        }

        footer hr { border: 0; border-top: 1px solid #c8c8c4; }

        .breadcrumb {
            margin-bottom: 12px;
            font-size: 14px;
            color: #6b6b66;
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.nav')
    <div class="container">
        @if(session('success'))
        <div class="flash">
            {{session('success')}}
        </div>
        @endif
        @include('partials.breadcrumb')
        @yield('content')
    </div>
    @include('partials.footer')
    @stack('scripts')
    
</body>
</html>