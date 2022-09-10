module.exports = {
  purge: [
	  './resources/**/*.blade.php',
	 './resources/**/*.js',
	 './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
        screens: {
            'xs': '300px',
            // => @media (min-width: 300px) { ... }

            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
        },
	colors: {
		transparent:   'transparent',
		primary:       '#196AFF',
		primarySoft:   '#6ba4ff',
		primaryDark:   '#0D3580',
		secondary:     '#00A82D',
		secondarySoft: '#49A875',
		secondaryDark: '#00691C',
		third:         '#434F45',
		thirdSoft:     '#6F8272',
		thirdDark:     '#38423A',
		dark:          '#1B1C1C',
		darkSoft:      '#426969',
		darkSolid:     '#324F4F',
		light:         '#EBEEF0',
		lightSoft:     '#ffffff',
		lightSolid:    '#D2D4D6',
		danger:        '#d61c0f',
		dangerSoft:    '#ff5d52',
		dangerDark:    '#570B06',
        darkDefault:    '#000',
	},
	extend: {},
  },
  variants: {
	extend: {},
  },
  plugins: [],
}
