FROM ubuntu:16.04

MAINTAINER ChinhLC

# Update
RUN apt-get update
RUN apt-get -y upgrade

# Git
RUN apt-get install git git-core -y 

# Tools
RUN apt-get install wget -y       
RUN apt-get install vim -y       
RUN apt-get install sshpass -y

EXPOSE 80
