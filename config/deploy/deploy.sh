#!/usr/bin/env bash
projectName='pandor-concept'
rm -R ~/Lab/website/releases/${projectName}
cd ../../../
zip -r temp-deploy.zip ${projectName}
mv temp-deploy.zip ~/Lab/website/releases/
cd ~/Lab/website/releases/
unzip temp-deploy.zip
rm temp-deploy.zip
cd ${projectName}
rm config.json
mv config/deploy/config.json config.json
mv config/deploy/index.html public/index.html
mv public/index.php public/index.php.off
rm -r config
rm docker-compose.yml
rm Dockerfile
rm -r .git
rm -r .idea
rm -r .gitignore
rm -r README.md