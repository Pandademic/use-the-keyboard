<script type="text/javascript" src="{{ $mix['/assets/js/app.js'] }}"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            operatingSystem: 'windows',
            searchInput: '',
            isMacOnly: {!! isset($mac_only) && $mac_only ? 'true' : 'false' !!},
            isWindowsOnly: {!! isset($windows_only) && $windows_only ? 'true' : 'false' !!}
        },
        created() {
            if(navigator.platform.indexOf('Mac') > -1) {
                this.operatingSystem = 'mac';
                this.changeAllKeys('Ctrl', 'Cmd');
            }
        },
        methods: {
            toggleOperatingSystem() {
                if(this.isMacOnly || this.isWindowsOnly) {
                    return false;
                }
                
                if(this.operatingSystem === 'windows') {
                    this.operatingSystem = 'mac';
                    this.changeAllKeys('Ctrl', 'Cmd');
                } else {
                    this.operatingSystem = 'windows';
                    this.changeAllKeys('Cmd', 'Ctrl');
                }
            },
            changeAllKeys(from, to) {
                if(!this.isMacOnly && !this.isWindowsOnly) {
                    let keys = document.getElementsByClassName('key');
                    for (let key of keys) {
                        if (key.innerHTML === from) {
                            key.innerHTML = to;
                        }
                    }
                }
            },
            showPotentialResults(search) {
                let programs = document.getElementsByClassName('data-program');
                for(let program of programs) {
                    program.style.display = 'block';
                    if(!program.dataset.slug.startsWith(search.toLowerCase()) && !program.dataset.title.toLowerCase().startsWith(search.toLowerCase())) {
                        program.style.display = 'none';
                    }
                }
            }
        },
        watch: {
            searchInput(val) {
                this.showPotentialResults(val);
            }
        }
    });
</script>

@yield('bottom-scripts')
