# Infrastructure

## Init

```shell
$ docker swarm init --advertise-addr <network-container>
$ docker-compose up
```


# TODO

* Configurate of file docker-compose.yml with Network and IP fixe - OK
* Configurate Mosquitto - OK
* Configurate Symfony+FPM - OK
* Configurate Mysql - OK
* Configurate https://api-platform.com - OK
* Create migration to database Mysql
	* Database: iot - OK
	* Tables: - OK
		* device - OK
			- id
			- token	
			- id_config
		* config - OK
			- id
			- host Mqqt
			- user Mqqt
			- pass Mqqt
			- protocol Mqqt
* Create entity in Doctrine - OK
* Create API to device and config - OK
