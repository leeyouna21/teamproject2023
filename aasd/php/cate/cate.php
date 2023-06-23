<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<?php include "../include/head.php"; ?>
    <link rel="stylesheet" href="../../assets/css/maincate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Abel&family=Lato:wght@100&family=Poppins:ital,wght@1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Lato:wght@100&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
	<title>Only For You</title>

    <style>
        /* main */
        #main {
            margin-top: 100px;
            /* margin-bottom: 200px; */
            font-family: 'SBAggro';
        }
         /* content */
        #main .content {
            margin-top: 120px;
            height: 600px;
            margin-bottom: 200px;
            
        }
        #main .content h3 {
            font-size: 50px;
            font-weight: 500;
            text-align: center;
        }
        #main .content .content__inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            margin-top: 30px;
        }
        #main .content .content__inner > div {
            width: 18%;
            padding: 2px;
            text-align: center;
            background-color: rgba(231, 231, 231, 0.27);
            border-radius: 10px;
        }
        #main .content .content__inner > div img {
            width: 50%;
            height: 150px;
            filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.25));
        }
        #main .content .content__inner > div p {
            display: block;
            font-size: 30px;
            font-weight: 500;
            padding-bottom: 25px;
        }
        /* search */
        #main .search {
            margin-top: 120px;
            height: 195px;
            text-align: center;
        }
        #main .search h2 {
            font-size: 50px;
            font-weight: 500;
        }
        #main .search form {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        #main .search input {
            width: 80%;
            height: 90px;
            background-color: rgba(231, 231, 231, 0.27);
            font-size: 24px;
            border: 0;
            border-radius: 10px; 
            padding: 0 30px;
        }
        #main .search button {
            position: relative;
            width: 12%;
            height: 90px;
            border-radius: 10px;
            background-color: rgba(231, 231, 231, 0.27);
        }
        #main .search button::before {
            content: '';
            width: 55px;
            height: 55px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-image: url("data:image/svg+xml,%0A%3Csvg width='60' height='60' viewBox='0 0 60 60' fill='none' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Crect width='60' height='60' fill='url(%23pattern0)'/%3E%3Cdefs%3E%3Cpattern id='pattern0' patternContentUnits='objectBoundingBox' width='1' height='1'%3E%3Cuse xlink:href='%23image0_1_15' transform='translate(0.0333333 0.05) scale(0.00716146)'/%3E%3C/pattern%3E%3Cimage id='image0_1_15' width='128' height='128' xlink:href='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADsQAAA7EB9YPtSQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABxaSURBVHic7Z17nF1Fle9/9dj7vPuRdDokBCEvDDIYHkJI0gkR7kVlQHSGQZ0BRxku3kEliQTx+skHG5LwiGIEdS7M+OBeRO7g+PrgjEA0BAQCSoAAMem8TALpdHc6/e7T5+y9q9b9o0Pox9ln7332Pqc72t/PJ59Puk/VqupTa9euWmvVKoZxTueGs2tyA8n/RsQWQbOzQHw2Ea8FcZPADQbFhHAAriTndlYIJ8uF1cWF6gZwBIz9CdBNAJqIo6n6aNMB1gg91n/XeIGNdQdG0vv1RfX9eXE9EbtSK/k+pWR6aDeFsCCMPKSRh5B5cO4EbSILhheg8TyBPVedTD7DPrfVjvSPOIEYFwrQc2fD6QMaa5UyP+Q4RtWwDxkgRB6GmYURy5Yy4B5QFwPfCOgfZRLpX/+lKcOYKcDRxgVVlpCrtTau1Y55Eo3oCmMKZrwPsXgvGFeV6lY7CI+C6YerV+z6Q6UaHUsqrgAtjYvqteQPaCf+Ua2EGPk5FzZi8R4YsSwYG9NX9asEuqt6edN/MAYay46Uk4opwNv3LJghrNiDjh37MBHnIz/nwkIi2QVpDlSqS74ghjcYsW9UTd/xCLsaFZuKKkXZFYAazzRbRe3DtpX4OwIf1R7jCvFkJ8xYFhjHDxojbAPHjVXLd74w1n2JkrIqQOvaRdc6Kv6/lWOkRjXMADPejViiZ6yn+iAQiH7EHWdV5pa9bWPdmSgoiwK0fmvBVNUT2+TY8fcVakIIG4lMO4SwytF8JehgjFZVLW/64Vh3JCyRK0DrnQs/ZlvJ/6eVjI1ujRCL9yCW6AZj43e69wsBPyOK/1Ptyte6xrovpRKpArSsXfSglU/dAIxa44ExjUSmHYYxvhZ5oWHYpbX4RO3K7a+NdVdKIRIFONq4oCrH4tuUEz+t0OdC2EhWHQHnf7Y2lhxjdOOJ+EoY/agGZP+GJdNyLPknt8GX5gBS1S1/zoMPAHEi9v3uDfMax7ojQQk1A7SsW/RXyo6/pJSRLPS5YfYjkW4HGxcG54rxnaqunctPFIdTyUPTfPeCBpVLbyIljUKfG7F+JNPtpffsxObRqq6TPs0aN0ftuIickl4B7XcunKdy6d+6Dr75Fz34APCpntqWh2ikg2McEriDb31z4cm8J7HLbdqX5gBS6SNAxNs8VT0TuZmXwa6dCzs5HbZZDcUlNDgIDHTs205wQpzlkcgehtm1B+jeDxzdDRx5A3BykfbJCyJaX7Oy6daKNhqQQArQ1rgs7TC233HMyYU+F9JCuqolosHnGDj9KmRnfQS55CmwMMpvNNgm50iZEknDQFwKMLcFh8oDba8Dh34P7HsS6Hk7gj56w4BVVSt23luRxkogkAIcuv0i19U+5w5S1a2h/fWq7n3omf959NWcAYcKd48xIGkYyMRMJAxZQisEtLwG7H4c2PPrQeUoH6QJV9Wu3PmzcjZSKr4VoGXd4oetXPqagkIYIVXVAiFLN+069Wej+9zl6E2dBnKZQBhjSJkGahIxGKMdiqWR6wT++Bjw5iOA1ReNzFFQFxGdV7Ny174yNVAyvhSg/Z6FH8v2pX/utmaMJzsRS/SU1AGdno6OJevRlzi5qC8wZRqYnIxDRDXwI8l1AS9/G2j6JUBl2cG9XMWdBnbTnrJON0HxVICWxkX1DhIHC9r2AUgjh1SmtYTlJEfvBbeic8alRZ3sBueYnEqUONWXQNsbwPPrgKO7opdN7L7qlTtWRC+4dDwfJ83l026Dz7hGIn008ODrRD3arngM7R6DnzINTK9OV27wAaD+LODKR4D5n0HkvjJGN3XdP+/SaIWGo+hf2Lb2wn/M5aseciuWzLTDMPsDNZifdRnazrkZDrnrHmMMk5NxZGJmINmRc2Az8MxtUa8N9lRV585in91f2T2pC66jQI3LpKWS33UbfCHzMIxgg58963ocPvuWooPPGcPUTHLsBx8ATl0GfPQhID01Sqlzerpjq6IUGAbXkWiTzo91gUieQQiJVGegGbLv/C+jbe4/FF3oSc4wrSqFhKzglO9FzSzg8h8A1adFJpLAvtq14fRZkQkMQUEFaF676FQrn7jKrZIZy0JI/4vZvvO/jCOnfKTo4AvGMDWTgjk6ULgozH4bvG8jxMBmcGsHQGUwv6enAZf/G5A5JRJxDEhwzu+JRFhICj7DLWuX/MbKJy8pWIER0jXNvg0+2bP+CW1zryk6+JwxTMukYEr/g89UF/RbKwDrABLpBI7/KWIS7PQ1UKkP+Zblm563gcc/CwwcjUIaccben1m+480ohJXKqBmgpXFRvW3HP+hWwTD7fQ9+ftZlnoMPAFNSyYCD3wO192qo/j0w4zEM02PVAaP7fsje/+tbnm+qZgAf+jYg41FIY5ow5n6C0a8Ayb9H2sXawgDTp8FHp6ai7ZybPQe/NhFD0gz2zqdDN0PbWXDOIVwUR/Y+Bm69HkiuL+rmARfeEpEw+lT3fWfMjUhYSQwb6KONC6ocK3GZW2FpDEAIf5E9Ry5+oOhqHwDiUqImEexpYgPb4PTuGOyPWdAbfQyC7P4eynLWYN7HgTl/HYUkwYii0qaSGDZCjiFXa+Kuc3Es7u/p773gfyFr1BQtw8AwJZXwJW8o1PquY014GIi4vRc8V6Yjfou/AqTqQ4sh4O/bvntmOoIelcRwBXCMa90KMq4gDe+Vv05NQ+cMb2PXpFQcUgSz67Pcdjj97/hTGLiPHYPsfQRlmQWMFLDgS1FISsUc/fEoBJXC8RFoW7NgrnbMk9wKmrE++PkiO5Z+3fMAnSlESYYe3br++P+Fwd19/0Pg9h7w3CuB2/LFrEuBkxeEl0Pk+uCVm+MKQDDuLBbBZJhZT2FO/QfQlzjZs1xtIh7cyp7fAdX3rjdVFI5GK4js+3HQ1vxzwUpE4DO45Oj9c2ZE0JvAHFcApU3XeZsL25evv+sDKz3niJgUgVf9AIDmNRg6A8kADiJu7QQf2BK8TT9MPh04ZVFYKVwqw9XwVk44ABxZt2SaUiMycwzB8HFkW9W9z9fTXxUPPvWzIxvgZA8e/5kL7uv9PxSz+7tg6nDgtn1x9vXhZTAqaHgrNxwANOgGtygcAL7Mvj3zvwAqJgSDtv6U4X/qZqoDeOsm2G3Do6mMUhxFuhOx9i9D5J4PXteLqfMHZ4JwXEQPnuf/y4kICQBa8SKbWoKUXp5Ljr6a93quEVMx03XhxuzDwMBroNwOIL8fsN6Gkz8ySqkY55BmwfAEb1QHjI47IUU9dGw+SJ4MLU8GiekgOR1gITyQcy4Hjn6z9PpApiefPQ/Ai2GEBGVQAbQ8060AlzYYLx4iNXD6VZ5GHwBID3n6Wd8mUMdPoXN7QaofpP1t1eKpROiTRky1QWQ3jvwtSNSB5ClQsXOhkxeDeLV/oXMuA/5wH6BLTyJCSl+CSitAd+PCSd1aFozxBwDpY/rPzvqId0OCH7P3a+CtG2H3bEeQ/TljDLFkAqJsrmICU0fA1BHw/Cugvsdg16yEjl/gr3piElA/H2gpfcvJOFtYcuUS4VmTXQyX8GsAvky/uaT3Dib5zsC9tQJOz5vwP/gM0jSQrMp4mH6jhekemJ13gVs7/Veafn64RgnvDScgOJyIFd3DcA8FUNUzYcH7qYwZEsjvgNPzqu/OCSmRyKQQTyXBRqcXKj9kQfb8q//yYRUAmEn3zylxgVManBF/f9ECHq7f3Ezv6R8A4kKAHX0Ifp58xjni6SQSmZSrt69ScKsJzDnkr/CUswARapYSfYpVNFKIk3ZvkDEC90jSaNd6b384Y5CCg/JveZcVHMlMGjLAdrHcMPugdyFgcPBDRg0RZEVfA1yTmOT2IeOO5zk/OzndsxHjmNOHmPfTHEuO0XRfDB5ge1jznlBNEdenhhIQEA5y3/z6Sd9mm95bJXksvoTFisc+MM7GfMofDQfJAGMSNniUkAknIBicwFxXcH4yeSnuPVUfV4C66z08eOPsyQeg4x8AiTr/FeKuE6ovqNIKwIoEgPiZAbSPQXtn0MmYDlHv7vkkrUF6HGVW4dWwqr8QrI5bJL1PGOOuPplywLUucjzMxwzgJwnGsIe+7gbISe4BI441PpJJEUvDmnQ7IAqmQnDHdLWp+YNRZWeAYnZV7yTZ3NMBNChnBNNug1F3eaFPYOdtjHnOYF4Nu+4eaLOEeE0ebhvPCJGEHPuF8yIj6P10+3kBoOB40tSvwKj/21E6oLWCsscwtxKvQb7uLmjjtNLqO8GOy42ECOVKUlAQDuF+GJ58OHj87NiUyxNNU1ZA1l01Sgms/Bgdoee1yNfdFWzVPxLbO3LKg9ISLZQIB5G7pcePAhSpflxMMU9f/QrIyZcP+5WyFbSqbGp+4mnkp9wDkuH28WEVgDH0hutAMDjjcF11kfZ+vIX2flodr4wbU78CER9uULLzlc0k7tR8ASS8I5o86QsXdaQrrgDQrtEemryNMkbe+5yco3wsFKcMD6tyLMvXAjMKSE6FijdEI6xrf0gBVNHM4xxct7h2RXPPdYDZ651uzdbae12fuRhsyGKACHDsymwJtXEGIjNCdR8IKUDsjqQfPuFgqkgyHAati88CZvs2z0aICLbj8U5nEhhxJFF71YkI4sFPKBUk3w30h7tIRDGrKZrO+INz6KIhLFoV9/XH9v6Xr3yzOa/B1NYoK6DfMLGwMNUdjaDDLyOkDaN/0hf3+PQ9RwPX0n62WAGtinvCmN0Lk7xXvjnHY28/sBUjv7xKeQW54+2m9sWh34eVsKvSV9TxabnUC8w1NSOglLezJ9npnVJtwHaKLurYwOgLN4LG/pcKU80ARbDraA6pAAx/DN+JYHDWuNnh0nJdyivb2zKZevMHnmU0EbJFLHyUG61EFQsKIQXuN+rHjfYdoReARHgmXCeCwwGAC8f1DLXWAloXXwfI9jcQJ++sZ/1FHD2UH76bEFJUNDCEOfvDCdj9n+E7wZ1N4YUEbBIABHf+vVghx8cskD78nGeZrO1AuSzsyO4Y9rOocEgYc3yGfRVCO8C+J8J24WDNTXv2hhUSFA4AU6zeRxncl9x+XgPprfdDeriPiQg9LhY+PSJjN69wWBizm0uvvPtXwECHd7kiEPDbUAJKhAMAa9xuCWm5vgRtKwkqcnYAGNwNZNq3ejbYm8+PXgwWMEZW2iHMUOIikBTw+v+JogdPRiAkMMe38FxaD7sVImJwbG9jSfVLd0N4PLhKE7pzI/wHPA7Gh68ztPIfGUS8GiRngFjpvngSrrkxirP3yQisf+jJJpKPhxVSCse/dW1baxnXt7plCLPzKc8kESx3FLWHNqF9+sVFy3UNWMjEYhBDpnmRnAWn792dgJO3YMZMMJeEZUQcKnUpVPrKIR48DZ57FbL/Z+D5YPc4qviFgcoPdjIHbP2X4PVGQKCfTP/c1tB+5FI4/u1Ob9yaFdJ6w62gbSdQ7AjZO2R+fxdiVNxDSCB0DAyf9mna14YNNhEh29MHO5eHUg600lCOAztnw6LZsCbdDafmiyPctxw6fh6syetgTV4HbfoLsdeJhdCx+b7KDuOVB4HeEGuHYwjOXGffcjPs8ZIiv8G1JDFYeR8Bj9pB3SvrPfP39OUtZK137QLMPBXylNtHKUF+IIeBnn5ke3phORmoqbdDn3w/KOF6oHmwG7GzYdXdC6t2dVEfv46dA7u6hNzNHbsHbxkJC+FAumPn78ILKo1Ro9R8+8XdjlM4WwjnNjK1h+FnidbdcCc66osfdpWcYXp1BmKIsjDVCmq+E3pgB0jlwJgEi58KNvlaIFP81eIOQeSeh8j+FszeB5ANMmZDJS+BSlyEwJ5AewD45bVAV/gbYBjDLVXLd34jtKBS2x/5i9a1C2/P56tuc6uQzLT5ShkDcLRd8VP0e+QLjBsSJ2VS4/BEQBGeuW1w6xeeo1aeZk65tamiQSBDGbXCmrp6y9eEcI9rsgb8Jk3QqNv0P2HC43Cp7aAzOy7uTvDH9h9HNfgA6FtjOfiAS7p4ZuQfdKvgODFfhiEA4P2tmPr0FzwNRN25PLpGbg3HI/ueBF4MlQZmKD1kmt+NSlipFFSAabbxZS5t13l+IFsLv+9N2dmEk7Z8FcJDCTqzOfTmKhsHGIi3Xxic+qO7Uezemhvf6IxKWKkUngEaNzuC93/ebbGnHNPfjuAYRvOLmP67VZAeR83aswOupuKxhPZvAjbeDKioQtTY3qrq3HrvcuWn6GPcfMdFTY4dL5gAgDGFTG2zr/OD76CqZ6Hlkgdgobijpzoew6RkRQ/IuLP9x4PTfpR3CRK7vHrljgjch+EpGs1lSHWFm5OISCCfDZBFC4Do3odpv/pbZLLFI3C6c3m09vVDVSgquCBODnjuDmDLNyIdfAJ+Pl4GH/BQgClffW6XEe//odvn+XyVL1fxsAatXtQ98WlMeetXRaefrOXgUHefdyhZOejYDfziGmDnLyIVq8D6NBPj6uJIXyu55juW7nPsxMxCn3HuIF192DOXYCGc2rnoXLwWfWbxvPvpmIlJyfgwg1FZcHKDnr1tPwRU9GuR1a8uUE8ePnXtruoda/CTn1T26JMLvr7R1m8tmGp3pg9qLQtGiEozi1TmSMmdGDjjGnSc8emiawPBGGqScWRMw1ea+ECQGvTqvfxtoK81WtnHeGz/HHx9+znHfmIvKs6v3ftk456yNBYA399k29qFf5fLZx5zq5JIdcCMh7FpMGTP+BS6512DHHN3PQvOUROPIROLQBG0M7i3f/X7QPf+cLKKsKenBp994WLk1JAgV0IvOPvirqfuiCKYoGQCfYMt6xZ938pnriu4O2SEVOYIpOHHTFwc6z0Xoe+916CvajaUiweSH7tKPh0zEQ+aV6hr36A1b9fjUV0B50qHFcd1z38Qh7Jut8LQw3GW++fXn/pGuHPlJRL4EWpe2/CUk0/998LSNDLVreAimvcncQP5OVdiYMZFyFXPQZ4nCoaWC86RNCSShoQpJeTIcLJ89+ChjUO/Bw69BPSEiP8LQE4J3PjSMrzR6Zk3aCfT4hNNv20swzVnxSlpDj28ZskrtpU8p9BnXDhIVbV45hcsBTISsKecC7v+/XCq50LFqqBlAlocuzuQNLiyYOQ7kOh4A+aRbYPROn2uxx/LhqMZVr7cgBeP+I40yjHQV5o2rr2vnP0aSUkKQI3L5GFOexw7XjCTAhcO0lUtYGVQghMBDYbbXr0ATzaXlGvgR4Yt/nn75saKZAopeRVFjWeazWLS68pKFgy7GZwJWn3fMvrngk0ct792fqmDPwihiZG4uhKvhFDLaGoEP8yXPOvYycWFPv9LU4IBR+DWrRdiS7t39lQ/4gDctGvjmu9FIcyNSDbUzWsafupYyb8pJI5xjVT6CIRxAvn8S6Arb2D5s/OxrbMWRqJq1FH30qGHs339n3t7y4bw26sCRGZRObxm8XrHTq4iGn2igzEgngxrJxi/7OjM4Jbnz8LbfcfsF0JAJqoiM1gxole4pr/ZsWld6PjzUbKjFNZ894IGnU89oZ3C6TLNeC/iyU5fKWhPFH71p5Ow9uV5w408AJiQkMkMIvyK2wH2yV0b74j0BFHkxnVqXBZvlfppy0pcWMhgJISNRLrd1z2E4xlHs4HVL52ZeOLAVNcyg0oQaeZXh4FWN21ce09UAsvmXTm8btGtykrcUch/wBhgxrsRS3SFvgBqLCDQLzSTyz/wH5f+G9lW0YuSuWFCxNIRf9P0aF9cXt/8eGPowyRl/frbGpelldD/btuxywrlHOTSQiLZCXniLBD3gdhNx/35591gzIolj5C2iwZGcCMGEQ+XRLoAryqmr9z71LpQ6U0q8vw1333+UlipRxzbnFGoScMcQCzZ6euCqjGiB8C9VdW59eyz+4dp68ylNy+FndvslVdXmAnwWETJqN7lMDF8fPdTa14qVUBFJ+CWOxd/VNvyW46KzRx1zIwRDLMf8USP50VVFeQoCN+hmHFfsQDO2UtXPqgt6wYvYSKeBDciD3XLEdh1uzfe8WgplcfkDXx43YIPkhP/F0fF5o0+b0gwjBzMRM/gjaVj0UPCAcbxnZwUD9R/frsvk+zsxcv3aOXM9ion4ilwI/KLwQhg63ct5l9FY2OgyJwxXYL13nnOlD6V/JrWxieUY9aN7I4QNoxYL8xYthJ+hR4Q/ZIR+0lmxs7/YlcjUIOzF62qJ5Y/SEp7jq5MpMEKx9aEgjH8tDcmPh1kcThu1uBH7mg4z2ZYDS0WKWVOGWZQYoAQeRhmFoaZBReRmZYPAthEjH5drfofZ196O5S17fQlN3/MdvI/L5J07TgiWQUuynIL6h8UE5fvfarRV8bKcaMAQ6HGZfF207rWVvxqkDxLaTGJlDweL8a5gpD5Y/+swettvY1LWQBNYPgjEZ5hWjxd/aXtkYdkzV5680Payv2jVznGAJGoAiuPEvyJCfpI0xNrPbOOjksFKERb47K0jjsf5AqLHY33MsYyDCxFmlUTkOBM2+BOpxDWYSHtQ1zaB8F0NzTfoznfVXvT9rcqlYRxdsOKvdqxfVwAySBTVWDu1zaFoYMzfcXOp9a9ULwHE0TO7EWr6gnWQdLKe7XHOGQyUy4l6CdGn9z91FrX06zj7ZK+Pws633qhf8rshje1Up/0Lk3QygaXBhiLyoN4HJOBfWLS7KWtHfueLZjBa0IBysTR/Vt2Tj6tYRZp5Z17hgikbDDDjD7kHeAM7K8nz76Iju57dlQm0olXQJmZ1bByBznWPD9lGRcQyejcyAV4aLot/sfmzY3Ht1GRzzkTDCch8+czIX0FQpBWUAM98LONLJHPHDbUz2YsXHncJj0xA1SAuYtWnO2Q2grSvh44JuTgFrFso8Oe1ZJfsefXjT0TClAh5i790uccO/+A340okwZkopyXiLKXubY/PLEIrBAdB7ZsnXxaw3zS6gxfFbQGaQVuRG8yPsZ0Al84MQNUmFkNy/eR4xQ8aV2IMsUSvENuYhFYYXJSXsA49+1z0HYeKle2Y4POhAJUmObN97ZzmVrMApyd03YeOl8WJdg7sQYYAzoOPNcyaeaSA6TVx/zWIaUAELiM8CINRo9PKMAY0Xlgy7a6mUuqSTvF8+kOgZQDMICLaJSAaayeWASOMbMaVj5LjrUkSB0RS4Cb4eILGXAw3dE6Z2INMMbse27DMi5loIQFKj8AZYWLpCaGe7Zu/Vd7QgHGHj0g5XlgMtAqT+ez0FbJ6XX3WZb4ATDhCxgXNG++tz0mxLksYGoVle+HsgMrgdbAdfs3N+aACQUYN+x87pu7tIhdGij1KgCd64cOoASM4Zt7Nq457haeUIBxxP7fff0ZIWKf8RPgOBSV6wc53pMHAZuV6Fo99HcT28BxRsfBLa/XndYA0mpZkHrascC4AHO5b5lAb9q2/NC+36wfttaYUIBxSMfBLc/UzVw6g7RzbpB65FhgQhaKLzzAFF289+k1o7J5TtgBxjGzG1Y8rR17WaBKDJDxdw+eEOhNzegyt0OkEwowzpnVsGIbOfb7g9aTg2cOnnZgfXzfb+7pdis3sQgc57xH1ixgXAZOYKzs3EtGrfhwscEHJmaAE4IZC1dOMrneS8opfgUbAMa5AylX7Xt2g6+EkxMKcIIw+9JV9dRn7SatCuec4VxxLn9JA+Z1+7YWf+qHMqEAJxAzL775VJazXyetqsAYgbE8Y+IAZ3h0imLrt5SQSu7/A0tiXU6WU+AwAAAAAElFTkSuQmCC'/%3E%3C/defs%3E%3C/svg%3E%0A");
            background-size: cover;
            background-position: center;
        }
        /* list */
        .category_wrap .list h2 {
            text-align: center;
            font-size: 50px;
            margin-bottom: 50px;
            margin-top: 100px;
        }
        .category_wrap .list .list_wrap .inner{
            width: 100%;
            height: 300px;
            padding: 50px;
            display: flex;
            /* background-color: aqua; */
            display: flex;
            justify-content: space-around;
        }
        .category_wrap .list_img {
            width: 200px;
            height: 200px;
            /* background-color: #555; */
        }
        .category_wrap .list_img img {
            width: 130px;
            height: 130px;
            vertical-align: top;
        }
        .category_wrap .list_desc{
            width: calc(100% - 300px);
            height: 200px;
            /* background-color: #444; */
            padding: 15px;
        }
        .list_desc h3 {
            font-size: 30px;
            color: #000;
        }
        .list_desc p {
            font-size: 20px;
            font-weight: 300;
            word-break: keep-all;
        }
        .list_desc a {
            display: block;
            padding: 20px 0;
        }
        .list_desc a:hover{
            text-decoration: underline;
        }
        /*  */
        #modal{
            width: 100%;
            height: 100vh;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: none;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
        }
        #modal .container{
            width: 800px;
            height: 800px;
            background-color: #F6F6F6;
            border-radius: 10px;
            margin-top: 100px;
        }
        #modal .container .header{
            display: flex;
            padding-top: 50px;
            position: relative;
        }
        #modal .container .header .c1 {
            background-color: #ccc;
            /* width: 200px;
            height: 200px; */
            border-radius: 10px;
            align-items: center;
            display: flex;
            margin-left: 30px;
            box-sizing: border-box;
            padding: 30px;
            
        }
        #modal .container .header .c1 img{
            width: 150px;
            height: 150px;
            display: block;
        }
        #modal .container .header .c2 {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #modal .container .header .c2 h1{
            font-size: 50px;
            font-weight: 300;
        }
        #modal .container .header .c3{
            position: absolute;
            top: 0;
            right: 0;
        }
        #modal .container .header .c3 img {
            width: 50px;
            height: 50px;
            cursor: pointer;
        }
        #modal .container .main ul li {
            font-size: 18px;
            font-weight: 300;
            line-height: 2;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
        }
        #modal .container .main ul li span {
            color: #f01;
        }
        /* //main */



        @keyframes rotation {
            from {
                transform: rotate(0deg);
        }
            to {
                transform: rotate(360deg);
        }
        }
        
        #lastwrap {
            width: 100%;
            height: 600px;
            background-color: #FFEC40;
        }
        .lastcontainer {
            width: 1260px;
            height: 600px;
            margin: 0 auto;
        }
        .lastcontainer h1 {
            font-weight: bold;
            font-size: 90px;
            color: #86BEE7;
            padding-top: 30px;
            text-align: center;
            line-height: 1.5;
            font-family: 'Poppins', Italic;
        }

        .lastcontainer h1 span {
        animation: changingText 4s infinite;
        font-family: 'Poppins', Italic;
        font-weight: 200;
        }
        .scroll-arrow {
        position: fixed;
        bottom: 30px; /* 원하는 위치로 조정 */
        width: 40px; /* 화살표 너비 */
        height: 40px; /* 화살표 높이 */
        background-image: url("../../assets/img/hwa.png"); /* 화살표 이미지 경로 */
        background-size: cover;
        background-repeat: no-repeat;
        z-index: 9999; /* 화살표가 다른 요소 위에 표시되도록 설정 */
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        cursor: default;
        }
        ..main-heading {
            display: block;
            font-size: 50px;
        }
        /* 애니메이션 효과 추가 */
        .scroll-arrow {
        animation: scrollAnimation 1s infinite alternate;
        }

        @keyframes scrollAnimation {
        0% {
            transform: translateY(0); /* 초기 위치 */
        }
        100% {
            transform: translateY(10px); /* 이동할 거리 */
        }
        }

        @keyframes textAnimation {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .main-heading .animated-text {
            opacity: 0;
            animation: textAnimation 1s ease-in-out forwards infinite;
            animation-delay: 1s;
        }

    </style>
</head>
<body>
    <?php include "../include/header.php"?>
    <main id="main" >
        <div id="lastwrap">
            <div class="lastcontainer">
                <h1>LET'S LEARN <br>ABOUT <br> <span id="changing-text" style="font-weight: 100;"></span> <br> TOGETHER</h1>
            </div>
        </div>
        <a href="#section2" class="scroll-arrow"></a>
        <div class="category_wrap">
            <div class="container">
                <div class="content">
                    <h3>어떤 부분을 자세히 알고싶은가요 ?</h3>
                    <div class="content__inner">
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content01.svg" alt="눈">
                                <p>눈</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content02.svg" alt="간">
                                <p>간</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content03.svg" alt="뼈">
                                <p>뼈</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content04.svg" alt="임산부">
                                <p>임산부</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content05.svg" alt="스트레스">
                                <p>스트레스</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content06.svg" alt="피부">
                                <p>피부</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content07.svg" alt="혈액순환">
                                <p>혈액순환</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content08.svg" alt="소화기능">
                                <p>소화기능</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content09.svg" alt="호흡기능">
                                <p>호흡기능</p>
                            </a>
                        </div>
                        <div class="card" data-target="div1">
                            <a href="#c">
                                <img src="../../assets/img/content10.svg" alt="갱년기">
                                <p>갱년기</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <h2 class="list_title"></h2>
                    <div class="list_show" id="div1">
                        <!-- <div class="list_wrap">
                            <div class="inner">
                                <div class="list_img"><img src="" alt=""></div>
                                <div class="list_desc">
                                    <h3>고등어</h3>
                                    <p>등 푸른 생선에는 오메가 3 외에 비타민A도 함유되어 있습니다. 비타민 A는 눈에 좋은 영양소이며, 야맹증을 예방하는데 좋습니다.
                                        대표적인 등 푸른 생선으로는 고등어, 꽁치, 삼치 등이 있고 해당 생선들에 오메가 3가 풍부하게 들어있습니다. 오메가 3는 이미 여러 논문을 통해 안구건조증 개선에 효과가 있다고 알려져 있죠.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include "../include/footer.php"?>
    <div id="modal">
        <div class="container">
            
        </div>
    </div>
    <script>
       // 스크롤 화살표 클릭 시 조금씩 스크롤 내리기
    
        document.addEventListener("DOMContentLoaded", function() {
        var scrollArrow = document.querySelector(".scroll-arrow");
        var scrollStep = 600; // 스크롤 단계 크기 (조정 가능)
        var scrolling = false;

        function scrollStepByStep() {
            var currentScrollPosition = window.pageYOffset;
            var targetScrollPosition = currentScrollPosition + scrollStep;

            if (targetScrollPosition >= document.documentElement.scrollHeight) {
                window.scrollTo({ top: document.documentElement.scrollHeight, behavior: 'smooth' });
                scrolling = false;
                return;
            }

            window.scrollTo({ top: targetScrollPosition, behavior: 'smooth' });

            if (scrolling) {
                requestAnimationFrame(scrollStepByStep);
            }
        }

            scrollArrow.addEventListener("mousedown", function(e) {
                e.preventDefault();
                scrolling = true;
                scrollStepByStep();
            });

            scrollArrow.addEventListener("mouseup", function() {
                scrolling = false;
            });

            window.addEventListener("scroll", function() {
                if (scrolling) {
                    scrolling = false;
                }
            });
        });

        
        const textElement = document.getElementById('changing-text');
        const texts = ['Health' , 'Exercise ', 'Nutrition' , 'body' ,'Diet ', 'Vitamins ', 'Vegetables',];
        
        let currentIndex = 0;
        
        function changeText() {
            const currentText = texts[currentIndex];
            let newText = '';
            let eraseInterval = 100;
            let writeInterval = 100;

            let eraseTimer = setInterval(() => {
                newText = currentText.substring(0, newText.length -1);
                textElement.textContent = newText;

                if(newText === '') {
                    clearInterval(eraseTimer);

                    let writeTimer = setInterval(() => {
                        newText = currentText.substring(0, newText.length + 1);
                        textElement.textContent = newText;

                        if(newText === currentText) {
                            clearInterval(writeTimer);
                        }
                    },writeInterval);
                }
            }, eraseInterval);

            currentIndex = (currentIndex + 1) % texts.length;
        }

        setInterval(changeText, 1000);

        const list_show = document.querySelector(".list_show");
        const river = document.querySelector(".river");
        const list_title = document.querySelector(".list_title");
        const content__inner = document.querySelectorAll(".content__inner > div");
        const modal_container = document.querySelector("#modal .container");
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('category');
        let arr =[];
        
        

        document.addEventListener("DOMContentLoaded", ()=> {
            const urlParams = new URLSearchParams(window.location.search);
            const category = urlParams.get('category');
            if (category) {
                data(category);
                const targetElement = document.querySelector(".list");
                const scrollToTarget = () => {
                const windowHeight = window.innerHeight;
                const targetOffset = targetElement.getBoundingClientRect().top;
                const currentOffset = window.pageYOffset;
                const difference = targetOffset - currentOffset;
                const duration = 300;
                const startTime = performance.now();
                const animateScroll = (timestamp) => {
                    const timeElapsed = timestamp - startTime;
                    const progress = Math.min(timeElapsed / duration, 1);
                    const scrollOffset = currentOffset + difference * progress;
                    if (windowHeight > targetElement.offsetHeight) {
                    window.scrollTo(0, scrollOffset);
                    } else {
                    window.scrollTo(0, scrollOffset - windowHeight / 2);
                    }
                    if (timeElapsed < duration) {
                    requestAnimationFrame(animateScroll);
                    }
                };
                requestAnimationFrame(animateScroll);
                };
                scrollToTarget();
            }
        });

        content__inner.forEach((el,i)=>{
            const arr1 =["eye","river","born","pregnant","stress","skin","blood","digestive","Breathing","climacterium"];
            
            el.addEventListener("click",()=>{
                data(arr1[i]);
                var listShow = document.querySelector(".list_title");
                var scrollToPosition = listShow.offsetTop-100; // 요소의 위치 (상단에서의 거리)
                window.scrollTo({
                    top: scrollToPosition,
                    behavior: 'smooth'
                });
                window.addEventListener('scroll', function() {
                var windowHeight = window.innerHeight; // 현재 창의 높이
                var scrollPosition = window.scrollY; // 현재 스크롤 위치
                var elementOffset = listShow.offsetTop-150; // 요소의 위치 (상단에서의 거리)

                if (scrollPosition + windowHeight >= elementOffset) {
                // 페이지가 요소의 위치에 도달하면 스크롤 이벤트 제거
                window.removeEventListener('scroll', arguments.callee);
                
                // 요소가 가장 아래에 위치하도록 스크롤 이동
                // window.scrollTo({
                //     top: elementOffset,
                //     behavior: 'smooth'
                // });
                }
            });
            })
        })
        
        function data(test){
            fetch('../../assets/json/food.json')
            .then(response => response.json())
            .then(data => {
                arr = data.map((item, index) => {
                    const a = item[test];
                    console.log(a);
                    let datalist  = [
                        {
                            title : a[0].title,
                            name : a[0].name,
                            msg : a[0].messages,
                            msg1 : a[0].message1,
                            msg2 : a[0].message2,
                            msg3 : a[0].message3,
                            msg4 : a[0].message4,
                            img : a[0].img
                        },
                        {
                            name : a[1].name,
                            msg : a[1].messages,
                            msg1 : a[1].message1,
                            msg2 : a[1].message2,
                            msg3 : a[1].message3,
                            msg4 : a[1].message4,
                            img : a[1].img
                        },
                        {
                            name : a[2].name,
                            msg : a[2].messages,
                            msg1 : a[2].message1,
                            msg2 : a[2].message2,
                            msg3 : a[2].message3,
                            msg4 : a[2].message4,
                            img : a[2].img
                        },
                        {
                            name : a[3].name,
                            msg : a[3].messages,
                            msg1 : a[3].message1,
                            msg2 : a[3].message2,
                            msg3 : a[3].message3,
                            msg4 : a[3].message4,
                            img : a[3].img
                        },
                        {
                            name : a[4].name,
                            msg : a[4].messages,
                            msg1 : a[4].message1,
                            msg2 : a[4].message2,
                            msg3 : a[4].message3,
                            msg4 : a[4].message4,
                            img : a[4].img
                        }
                    ];
                    
                    return datalist;
                })
                showlist();
            })
            .catch(error => console.error(error));
        }
        
        function showlist(){
            const show = [];
            console.log(arr[0])
            list_title.innerHTML = `${arr[0][0].title}에 대해 고민이신가요?`
            arr[0].forEach((data)=>{
                show.push(`
                        <div class="list_wrap">
                            <div class="inner">
                                <div class="list_img"><img src="../../assets/img/${data.img}" alt="${data.name}"></div>
                                    <div class="list_desc">
                                        <h3>${data.name}</h3>
                                        <p>${data.msg}</p>
                                        <a href="#"">자세히보기</a>
                                    </div>
                            </div>
                        </div>
                `)
            })
            list_show.innerHTML = show.join('');
            
            const a = document.querySelectorAll(".list_desc > a");
            // console.log(a)
            a.forEach((modal, i) => {
                modal.addEventListener("click", (e) => {
                    e.preventDefault();
                    modallist(i);
                });
            });
        }
        function modallist(i){
            const show = [];
            const modallist = arr[0];
                show.push(`
                <div class="header">
                    <div class="c1">
                        <img src="../../assets/img/${modallist[i].img}" alt="${modallist[i].name}">
                    </div>
                    <div class="c2">
                        <h1>${modallist[i].name}</h1>
                    </div>
                    <div class="c3">
                        <img src="../../assets/img/x.png" alt="">
                    </div>
                </div>
                <div class="main">
                    <ul>
                        <li>${modallist[i].msg1}</li>
                        <li>${modallist[i].msg2}</li>
                        <li>${modallist[i].msg3}</li>
                        <li>${modallist[i].msg4}</li>
                    </ul>
                </div>
                `)
                modal_container.innerHTML = show.join('');
                modal()
        }
            
        

        function modal(){
            const image = document.querySelector(".c3 img");
            const modal = document.querySelector("#modal");
            const a1 = document.querySelectorAll (".list_desc a");
            const body = document.querySelector("body");
            a1.forEach((el) => {
                modal.style.display = "block";
                body.classList.add("modal-open");
            })
            image.addEventListener("click", function(){
                modal.style.display = "none";
                body.classList.remove("modal-open");
            })
        }






        
    </script>

    

    
</body>
</html>