<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudAi Tech</title>
    <!-- <link rel="stylesheet" href="src/css/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="src/js/tailwindcss.js"></script>
    <script src="src/js/script.js"></script>
    <link rel="stylesheet" href="src/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/tailwindcss">
        @layer base {
            .container{
                @apply mx-auto px-4 lg:px-8
            }
              /* 20px */
            .heading-title-xxs{
                @apply font-neuro lg:text-[1.25rem] lg:leading-9 tracking-wide
            }
        
            /* 30px */
            .heading-title-xs{
                @apply font-neuro lg:text-[1.875rem] lg:leading-8 tracking-wide
            }
            
            /* 32px */
            .heading-title-sm{
                @apply font-neuro lg:text-[2rem] lg:leading-[3.125rem] tracking-wide
            }
            
            /* 46px */
            .heading-title-md{
                @apply font-neuro lg:text-[2.875rem] lg:leading-[3.125rem] tracking-wide
            }
            
            /* 50px */
            .heading-title-lg{
                @apply font-neuro lg:text-[3.125rem] lg:leading-[3.75rem] tracking-wide
            }
            
            /* 60px */
            .heading-title-xl{
                @apply font-neuro lg:text-[3.75rem] lg:leading-[3.125rem] tracking-wide
            }
            
            /* 65px */
            .heading-title-2xl{
                @apply font-neuro text-[1.625rem] leading-[1.875rem] lg:text-[4.0625rem] lg:leading-[5.4375rem] tracking-wide
            }

            .heading-text-lg{
                @apply lg:text-[1rem] lg:leading-[1.75rem]
            }

            .heading-text-xl{
                @apply text-[0.875rem] leading-6 lg:leading-9 lg:text-[1.25rem]
            }
        }
    </style>

</head>
<body class="bg-gradient-to-b from-black to-gray-dark h-screen text-white font-resamitz text-lg">
    <?php include 'header.php' ?>
    <?php include 'components/main-text.php' ?>
    <?php include 'components/text-image.php' ?>
    <?php include 'footer.php' ?>
</body>
</html>