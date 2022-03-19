
module.exports = {
	// purge: {
	// 	enabled: true,
	// 	content: [
	// 		'./*.php',
	// 		'./**/*.php'
	// 	]
  // },
  corePlugins: {
    container: false
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
					marginLeft: 'auto',
					marginRight: 'auto',
                    maxWidth: '100%',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '768px',
          },
          '@screen lg': {
            maxWidth: '1200px',
          },
          '@screen xl': {
            maxWidth: '1400px',
          },
        }
      })
    }
	],
	theme: {
        borderRadius: {
            'none': '0',
            'sm': '.125rem',
            DEFAULT: '4px',
            'lg': '8px',
            'full': '9999px',
        },
		extend: {
            colors: {
                main: '#1F5287',
                main_head: '#0A6ED1',
                main_button: '#01356B',
                main_yellow: '#FED501',
                main_text: '#6e7381',
                blue: {
                    light: '#0A6ED1',
                    DEFAULT: '#005BBB',
                    dark: '#1F5287',
                    background: '#0057b7'
                },
            },
            maxWidth: {
                'text-head': '450px',
                'text-head-2': '550px'
            },
            fontFamily: {
                'sans': ['Roboto', 'Helvetica', 'Arial', 'sans-serif']
            }
		}
	}
};
