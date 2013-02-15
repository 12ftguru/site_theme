# We use normalize to baseline our css. Go to https://github.com/jzorn/compass-normalize-plugin for installation instructions
require 'normalize'


http_path = "/"
css_dir = "css"
sass_dir = "scss"
images_dir = "wp-content/themes/twelvefootguru/images"
javascripts_dir = "js"

output_style = (environment == :development) ? :expanded : :compressed
environment = :development

#Move css/style.css to /style.css so WordPress can see it.
require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end
end
