@ECHO OFF
start C:\nginx-1.9.12\nginx.exe
ping 127.0.0.1 -n 1>NUL
echo Starting nginx
echo .
echo .
echo .
ping 127.0.0.1 >NUL
EXIT