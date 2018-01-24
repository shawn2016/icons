<p align="center">
  <a href="https://github.com/shawn2016/icons.git">
    <img height="150" src="https://github.com/shawn2016/icons/blob/master/favicon.png?sanitize=true">
  </a>
</p>


isui-icon
---

The premium icon font for  isui Component Library. Designed by [@shawn2016](https://github.com/shawn2016/icons.git). 


They are free to use and licensed under [MIT](https://opensource.org/licenses/MIT). We intend for this icon pack to be used with [isui](https://github.com/shawn2016/icons), but it’s by no means limited to it. Use them wherever you see fit, personal or commercial. 

<p align="center">
  <a href="https://github.com/shawn2016/icons">
    <img src="https://github.com/shawn2016/icons/blob/master/test.png">
  </a>
</p>

## Installation

```bash
npm install isui-iconfont --save
```

## HTML Example

You need link CSS

```html
<link rel="stylesheet" type="text/css" href="node_modules/fonts/is-iconfont.css">
```

Used in Less:

```css
@import "~isui-iconfont/fonts/is-iconfont.css";
```

note: It has a `is-icon-` prefix. 

```html
<i class="is-icon-apple"></i>
```

Or use the `Unicode`, You can use [Unicode website](https://github.com/shawn2016/icons/unicode.html) to easily find the `Unicode` icon you want to use. 

```html
<style>
.iconfont{
  font-family: "is-iconfont" !important;
  font-size: 16px;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: 0.2px;
  -moz-osx-font-smoothing: grayscale;
}
</style>
<span class="iconfont">&#59907;</span>
```

## Development

Run the `npm install` to install the dependencies after cloning the project and you'll be able to:

To build `*.svg` `*.ttf` `*.woff` `*.eot` files

```bash
npm run font
```

To build site and push gh-pages branch

```bash
npm run start
```

## License

Licensed under the [MIT License](https://opensource.org/licenses/MIT).