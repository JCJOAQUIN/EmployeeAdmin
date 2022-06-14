module.exports = {
  purge: [
	  './resources/**/*.blade.php',
	 './resources/**/*.js',
	 './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
	colors: {
		transparent:    'transparent',
		primary:        '#196AFF',
		primarySoft:    '#6ba4ff',
		secondary:      '#00A82D',
		secondarySoft:  '#49A875',
		third:          '#434F45',
		thirdSoft:      '#6F8272',
		dark:           '#1B1C1C',
		darkSoft:       '#426969',
		light:          '#EBEEF0',
		lightSoft:      '#ffffff',
		danger:         '#d61c0f',
		dangerSoft:     '#ff5d52',
        darkDefault:    'E5E5E5',
	},
	extend: {},
  },
  variants: {
	extend: {},
  },
  plugins: [],
}
