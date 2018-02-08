# Infrastructure

## Init

```shell
$ docker swarm init --advertise-addr <network-container>
$ docker-compose up
```


# TODO

* Configurate of file docker-compose.yml with Network and IP fixe
* Configurate Mosquitto
* Configurate Symfony+FPM
* Configurate Mysql
* Configurate https://api-platform.com
* Create migration to database Mysql
	* Database: iot
	* Tables:
		* device
			- id
			- token	
			- id_config
		* config
			- id
			- host Mqqt
			- user Mqqt
			- pass Mqqt
			- protocol Mqqt
* Create entity in Doctrine
* Create API to device and config