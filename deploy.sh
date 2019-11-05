#!/usr/bin/env bash
projectName='pandor-concept'
rm -R ~/Lab/website/releases/${projectName}
cd ~/Lab/website/www/
zip -r temp-deploy.zip ${projectName}
mv temp-deploy.zip ~/Lab/website/releases/
cd ~/Lab/website/releases/
unzip temp-deploy.zip
rm temp-deploy.zip
cd ~/Lab/website/releases/${projectName}
rm config.json
mv config/deploy/config.json config.json
rm -r config
rm docker-compose.yml
rm Dockerfile
rm -r .git
rm -r .idea
rm -r .gitignore
rm -r README.md