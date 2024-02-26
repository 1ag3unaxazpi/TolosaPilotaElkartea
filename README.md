
# Tolosa pelota kirol elkartea - Zerbitzaria

- [Erabilitako materiala](#erabilitako-materiala)
- [Hardware](#hardware)
- [Hardware](#hardware)
- [Zerbitzaria nola administratu (SSH bidezko konexioa)](#zerbitzaria-nola-administratu)
- [Apache HTTP Server instalazioa](#apache-http-server-instalazioa)
- [MySQL Server instalazioa](#mysql-server-instalazioa)


## Erabilitako materiala

- [Oracle VM VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- [Ubuntu Server 22.04](https://ubuntu.com/download/server)
- [Apache HTTP Server](https://httpd.apache.org/download.cgi)
- [MySQL Server](https://dev.mysql.com/downloads/installer/)


## Hardware

- Disko gogorra: 50 GB
- Sistema Eragilea: Ubuntu Server 22.04
- RAM memoria: 4 GB
- CPU: 2

## Zerbitzaria nola administratu (SSH bidezko konexioa)

Zerbitzaria administratzeko, gure ordenagailutik egitea komeni da, ez zerbitzaritik. SSH konexioa erabiliz egin daiteke hori.

Jarraitu beharreko urratsak:

- Ireki Windows PowerShell aplikazioa administratzaile gisa
- Terminalean lerro hau idatzi eta pasahitza sartu:
```
ssh administrador@10.23.25.179
```


## Sare konfigurazioa

- Konfigurazioa mota: NAT
- Sare-parametroak esleitzeko metodoa: DHCP

 ![alt text](github_irudiak/dhcp.png)

![alt text](github_irudiak/ip-address.png)


## Apache HTTP Server instalazioa

- Zerbitzariaren terminalean komando lerro hau idatzi behar da:

```
apt install apache2
```


## MySQL Server instalazioa

- Zerbitzariaren terminalean komando lerro hau idatzi behar da:

```
apt install php-mysql
```