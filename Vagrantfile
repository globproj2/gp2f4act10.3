Vagrant.configure("2") do |config|
  config.vm.box = "generic/debian11"
  config.vm.hostname = "gp2f4act10"
  config.vm.provider "virtualbox" do |v|
    v.name = "gp2f4act10"
    v.memory = 2048
    v.cpus = 1
    v.customize ['modifyvm', :id, '--clipboard', 'bidirectional']
    # config.vm.synced_folder ".","/home/vagrant/gp2f4act10"     
  end

  config.vm.network "forwarded_port", guest: 80, host: 8000
    
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
