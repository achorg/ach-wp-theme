task :default => :develop

task :develop do
  compass
end

task :build do
  compass '', false
end

def compass(opts = '', watch=true)
  cmd = 'compass compile -c config.rb --force ' + opts
  cmd += ' && compass watch &' if watch
  sh cmd
end
