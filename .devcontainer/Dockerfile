FROM mcr.microsoft.com/vscode/devcontainers/base:ubuntu-20.04

# install php8.1
RUN apt update -y \
    && apt upgrade -y \
    && apt install lsb-release ca-certificates apt-transport-https software-properties-common -y \
    && add-apt-repository ppa:ondrej/php -y \
    && apt install php8.1 -y \
    && apt install php8.1-common php8.1-intl php8.1-xml php8.1-mbstring php8.1-bcmath php8.1-zip php8.1-curl -y

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# install nodejs
RUN curl -sL https://deb.nodesource.com/setup_16.x | sudo -E bash - \
    && apt install nodejs -y

# install other packages
RUN sudo npm i -g docsify-cli -\
    && sudo npm i -g vercel