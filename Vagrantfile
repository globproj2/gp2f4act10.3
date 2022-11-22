#Vagrant.configure("2") do |config|
#  config.vm.box = "generic/debian11"
#  config.vm.hostname = "gp2f4act10"
#  config.vm.provider "virtualbox" do |v|
#    v.name = "gp2f4act10"
#    v.memory = 2048
#    v.cpus = 2
#    v.customize ['modifyvm', :id, '--clipboard', 'bidirectional']
#    # config.vm.synced_folder ".","/home/vagrant/gp2f4act10"     
#  end

#  config.vm.network "forwarded_port", guest: 8000, host: 8000
    
#  config.vm.provision "shell", inline: <<-SHELL
#    sudo apt-get update -y
#    sudo apt-get install -y net-tools
#    sudo apt-get install -y whois
#    sudo apt-get -y install apt-transport-https ca-certificates curl gnupg2 software-properties-common
#    curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -
#    sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable"
#    sudo apt-get update -y
#    sudo sudo apt-get -y install docker-ce docker-ce-cli containerd.io docker-compose
#    sudo gpasswd -a vagrant docker
#  SHELL
#
#end

# https://manski.net/2016/09/vagrant-multi-machine-tutorial/#multi-machine.3A-the-clever-way
# https://developer.hashicorp.com/vagrant/docs/networking/public_network
# https://www.packetswitch.co.uk/vagrant-netdevops/


# -*- mode: ruby -*-
# vi: set ft=ruby :

BOX_IMAGE = "generic/debian11"
NODE_COUNT = 2

Vagrant.configure("2") do |config|
  config.vm.define "master" do |subconfig|
    subconfig.vm.box = BOX_IMAGE
    subconfig.vm.hostname = "master"
    subconfig.vm.network "public_network"
  end
  
  (1..NODE_COUNT).each do |i|
    config.vm.define "worker#{i}" do |subconfig|
      subconfig.vm.box = BOX_IMAGE
      subconfig.vm.hostname = "worker#{i}"
      subconfig.vm.network "public_network"
    end
  end

  config.vm.provision "shell", inline: <<-SHELL
    sudo apt-get update -y
	sudo apt-get install -y net-tools
    sudo apt-get install -y whois
    sudo apt-get -y install apt-transport-https ca-certificates curl gnupg2 software-properties-common
    curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -
    sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable"
    sudo apt-get update -y
    sudo sudo apt-get -y install docker-ce docker-ce-cli containerd.io docker-compose
    sudo gpasswd -a vagrant docker
  SHELL
end
