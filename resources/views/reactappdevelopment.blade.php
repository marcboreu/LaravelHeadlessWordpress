<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body class="development">
    <script type="module">
            import RefreshRuntime from "http://127.0.0.1:5173/@react-refresh"
            RefreshRuntime.injectIntoGlobalHook(window)
            window.$RefreshReg$ = () => {}
            window.$RefreshSig$ = () => (type) => type
            window.__vite_plugin_react_preamble_installed__ = true
    </script>
    @vite('resources/js/app.js')
    <div class="info-enviroment">DEVELOPMENT</div>
    <!-- React DOM Node -->
    <div id="app"></div>
</body>

</html>