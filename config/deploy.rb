set :application, 'swdc.se'
set :repo_url, 'git@github.com:synackdigital/swdc.se.git'
set :branch, :bedrock

set :deploy_to, -> { "/var/www/#{fetch(:application)}" }

set :log_level, :debug

set :linked_files, %w{.env web/.htaccess}
set :linked_dirs, %w{web/app/uploads web/app/upgrade}
