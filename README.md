##  open tailwind.config.js file and add files path there:
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}

## open webpack.mix.js file and add lines there:
  
mix.js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"), //ADD THESE LINE
  ]);

## open app.css file and add lines there: //resources/css/app.css

@tailwind base;
@tailwind components;
@tailwind utilities;


## RUN
composer i
php artisan key:generate
npm install && npm run watch

## REMINDER TO ADD STYLE LINK