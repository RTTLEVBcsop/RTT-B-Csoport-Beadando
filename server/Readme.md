RTT - Szerver

Szerverfájl elérhető: https://drive.google.com/file/d/123PXDhPiLfdSr65dEOOnAR3RuuQbnQyk/view?usp=sharing

FONTOS: Arra ügyeljetek, hogy a szerver fájlokat sose küldjétek fel githubra. Érdemesebb lenne, GIT-et telepíteni a szerverre és onnan pusholni a weboldallal kapcsolatos változtatásokat. 

Link, ahogy telepítettem: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04

VMWare Workstation 16 Player-t innen tudod letölteni: https://www.vmware.com/products/workstation-player/workstation-player-evaluation.html

Server-name:@webserver
Username:dev
Password:pw

Database PW: ajQG9NY6H4PjDVgn

Local IP: 192.168.95.128 (Ezt nézzétek meg saját magatoknál, mert változhat)
Ipv-6:fe80::20c:29ff:feae:214d

Weboldal helyi mappája: /var/www/rtt

Így kérjétek le az IP-t: ip addr show ens34 | grep inet | awk '{ print $2; }' | sed 's/\/.*$//'
Telepített alkalmazások: 
Available applications:
  Apache
  Apache Full
  Apache Secure
  OpenSSH
  Curl
Website elérhető: http://[your_server_ip]
Tesztelés képpen benne hagytam egy index.html-et és egy php