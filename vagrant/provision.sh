sudo apt-get update
sudo apt-get install -y git npm
cd /root/ && sudo npm cache clean -f && sudo npm install -g n && sudo n stable
sudo ln -sf /usr/local/n/versions/node/$(sudo ls /usr/local/n/versions/node/ | head)/bin/node /usr/bin/nodejs
