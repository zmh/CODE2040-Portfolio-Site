jQuery(document).ready(function($) {
    $("body").css("display", "none");
    $("body").fadeIn(3000);
    function goToRedesign() {
        event.preventDefault();
        linkLocation = 'http://codetwentyforty.org/beta';
        window.setTimeout(function(){$("body").fadeOut(3500, redirectPage);}, 5000);
    };
    function redirectPage() {
        window.location = linkLocation;
    };
    
    var id = 1;
    $('.terminal').terminal(function(command, term) {
    
    
        if (command.toLowerCase() == 'help' || command == "") {
            term.echo("Enter your first name!\nCool things happen if you\'re Tristan, Laura, Amy, or Ben.");
        } 
        
        
        // TRISTAN
        else if (command.toLowerCase() == 'tristan'){
            term.echo('Oh--hey Tristan! Thanks for checking out the site.\n I wanted to give a few reasons why I feel I\'m a good fit for CODE2040.\nDo you have a few minutes right now? (yes/no)');
            
            term.push(function(command, term) {
                
                // YES HE HAS TIME
                if (command.toLowerCase() == 'yes' || command.toLowerCase() == 'y') {
                    term.clear();
                    term.echo('Perfect! Well, there are a few reasons I think I\'d be\n a great fit for CODE2040:\n\n1. I\'m incredibly passionate about entrepreneurship.\nI worked on my own startup, I help run a number of startup organizations\non campus, and I really want to get involved in Silicon Valley.\n\n2. I\'m committed to increasing the number of minorities in tech.\nAs a member of Prep for Prep, I have interned in the business world\nand represented underrepresented students from NYC public schools.\n\n3. I love tech.\nI started programming in middle school and have continued since then.\nThat said, I\'m also interested in design, UI/UX, and product.\nI want to build and ship things people want to use.\n\nSound good so far? (yes/no)');
                    
                    term.push(function(command, term) {
                        if (command.toLowerCase() == 'yes' || command.toLowerCase() == 'y') {
                            term.clear();
                            term.echo('Perfect! Now that I laid out why I feel I am a\ngood candidate for CODE2040, I want to show you a redesigned site I made for CODE2040.\n\nHope you like it!');
                            goToRedesign();
                        }
                        else if (command.toLowerCase() == 'no' || command.toLowerCase() == 'n') {
                            term.echo('Your command ' + command + ' is not recognized, because I do not take no for an answer :) Try again?');
                        }
                        else {
                            term.echo('Command not recognized.');
                        }
                    }, {
                        name: 'js',
                       });                    
                    
                    
                // NO HE'S BUSY
                } else if (command.toLowerCase() == 'no' || command.toLowerCase() == 'n') {
                    term.echo('I understand, you must be super busy.\n\nBefore you go though, please check out the redesigned CODE2040 site\nI made--hope you like it!');
                    goToRedesign();
                } else {
                    term.echo('Command not recognized.');
                }
            }, {
                name: 'test',
            });    
        } 
        
        
        // LAURA
        else if (command.toLowerCase() == "laura") {
            term.clear();
            term.echo('Hi Laura! Thanks again for meeting with me a few weeks ago to discuss\nCODE2040. As you can see, I\'m really excited to be applying!\n\nI want to quickly lay out again why I feel I\'d be a great fit for\nCODE2040:\n1.  I\'m incredibly passionate about entrepreneurship.\n    I worked on my own startup, I help run a number of startup organizations\n    on campus, and I really want to get involved in Silicon Valley.\n2.  I\'m committed to increasing the number of minorities in tech.\n    As a member of Prep for Prep, I have interned in the business world\n    and represented underrepresented students from NYC public schools.\n3.  I love tech.\n    I started programming in middle school and have continued since then.\n    That said, I\'m also interested in design, UI/UX, and product.\n    I want to build and ship things people want to use.\n\nSound good so far? (yes/no)');
                    
                    term.push(function(command, term) {
                        if (command.toLowerCase() == 'yes' || command.toLowerCase() == 'y') {
                            term.clear();
                            term.echo('Perfect! I also put together a redesigned version of the CODE2040\nsite--I hope you enjoy it :)');
                            goToRedesign();
                        }
                        else if (command.toLowerCase() == 'no' || command.toLowerCase() == 'n') {
                            term.echo('Your command ' + command + ' is not recognized, because I don\'t take no for an\nanswer :) Try again.');
                        }
                        else {
                            term.echo('Command not recognized.');
                        }
                    }, {
                        name: 'js',
                       });                    
                } 
        
        
        // AMY
        else if (command.toLowerCase() == 'amy') {
            term.echo('Hi Amy!\nThanks again for speaking with me a few weeks ago about CODE2040.\n\nI put together a redesigned version of the CODE2040 website,\nhope you enjoy it!');
        goToRedesign();
        } 
        
        
        // BEN
        else if (command.toLowerCase() == 'ben') {
            term.echo('Wait, like Ben Horowitz? (yes/no)');
            
            term.push(function(command, term) {
                
                // YES OMG IT'S BEN HOROWITZ
                if (command.toLowerCase() == 'yes' || command.toLowerCase() == 'y') {
                    term.clear();
                    term.echo('Ben, it\'s an honor. Thought you\'d enjoy this:\n\n\"This is the last time, it\'s over friends\nNever been done before, never done again\nY\'all already know how much fun it\'s been\nSo party on and we catch you on the other end\nThis one\'s for you\nSo party on and we catch you on the other end\"\n\n-Murs, It\'s Over\n\nI know you\'re a busy guy, so last thing--\nplease take a look at the redesigned site I made for CODE2040!');
                    goToRedesign();
                }
                
                else if (command.toLowerCase() == 'no' || command.toLowerCase() == 'n') {
                    term.echo('\"The feeling is equal and for the best\nand with me you will have no regret.\" -Sirhustler, Don\'t Be Mean.');
                    goToRedesign();
                }
                
                else {
                    term.echo('One more time--are you Ben Horowitz? Cause that\'d be cool...');
                }
            }, {
                        name: 'js',
                       });                    
        }
        
        
        
        // ANYONE ELSE        
        else {
            term.echo("Hi " + command + "!\n\nTake a look at the new site I designed for CODE2040.");
            goToRedesign();
        }
    }, {
        greetings: "Hi there. What's your first name?"
    });
});