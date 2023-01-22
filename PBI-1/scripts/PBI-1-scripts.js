(function()
{
    function IDGenerator() {

        this.length = 8;
        this.timestamp = +new Date;

        let _getRandomInt = function( min, max ) {
            return Math.floor( Math.random() * ( max - min + 1 ) ) + min;
        }

        this.generate = function() {
            let ts = this.timestamp.toString();
            let parts = ts.split( "" ).reverse();
            let id = "";

            for( let i = 0; i < this.length; ++i ) {
                let index = _getRandomInt( 0, parts.length - 1 );
                id += parts[index];
            }

            return id;
        }


    }


    document.addEventListener( "DOMContentLoaded", function() {
        let btn = document.querySelector( "#generate" ),
            output = document.querySelector( "#output" );

        btn.addEventListener( "click", function() {
            let generator = new IDGenerator();
            output.innerHTML = generator.generate();

        }, false);

    });

})();

function generateIdentifier(): string
{
    $n = 3;
    return bin2hex(random_bytes($n));
}

