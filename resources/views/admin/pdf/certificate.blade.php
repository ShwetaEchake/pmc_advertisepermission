<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <style>
        :root {
            --border-strong: 3px solid #777;
            --border-normal: 1px solid gray;
        }
        @charset "UTF-8";
        @page {
            padding: 0 10px;
            size: us-letter;
            margin: 0px;
            margin-top: 5px !important;
        }
        * {
            padding: 0;
            margin: 0;
        }
        body {
            font-family: "Source Sans 3", Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 15px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 1050px 1380px;
            background: url('');
        }
        @media print {
            body {
                -webkit-print-color-adjust: exact;
            }
        }
        h4, h5{
            font-weight: 400;
        }
        .certificate-border{
            border: 3px solid #4f008b;
            margin: auto;
            width: 95%;
            height: 100%;
        }
        .certificate-inner-border{
            border: 1px solid #4f008b;
            margin: auto;
            margin-top: 5px;
            margin-bottom: 5px;
            width: 99%;
            height: 100%;
        }
        .app-detail-table{
            width: 95%;
            margin: auto;
            text-align:left;
            margin-top: 30px
        }
        .app-detail-table tr th{
            line-height: 20px;
            font-size: 20px;
            padding-top: 13px;
            border-bottom: 1px solid #ccc;
        }
        .marathi-table{
            width: 95%;
            margin: auto;
            margin-top: 40px;
            text-align:left
        }
        .marathi-table tr th{
            line-height: 32px;
            font-size: 18px;
        }
        a{
            font-size: 20px;
        }
    </style>
</head>

<body>

    <div class="certificate-border">
        <div class="certificate-inner-border">

            <h2 style="text-align: center; margin-top: 5px;" >तात्पुरते जाहिरात फलक परवानगी</h2>
            <table style="width: 95%; margin: auto; text-align:left; margin-top: -30px">
                <thead>
                    <tr>
                        <th style="width: 20%;">
                            <div>
                                <img style="width: 130px; height: 130px" src="{{ public_path('frontend/img/pmc.png') }}" alt="">
                            </div>
                        </th>
                        <th style="min-width: 60%; text-align: center;">
                            <div>
                                <h2 style="font-size: 40px;">पनवेल महानगरपालिका</h2>
                            </div>
                        </th>
                        <th style="width: 20%;">&nbsp;</th>
                    </tr>
                </thead>
            </table>

            <table style="width: 95%; margin: auto; text-align:left">
                <thead>
                    <tr>
                        <th style="width: 50%;">
                            <a href=""><strong>Application No:. </strong>{{ $application->application_no }}</a>
                        </th>
                        <th style="width: 50%; text-align: right">
                            <a href=""><strong>Date:. </strong>{{ $application->payment?->date }}</a>
                        </th>
                    </tr>
                </thead>
            </table>

            <table class="app-detail-table">
                <thead>
                    <tr>
                        <th style="width: 100px;">
                            <strong>Full Name:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->full_name) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Building Name:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->building_name) }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>Area:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->area) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Landmark:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->landmark) }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>City:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->city) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Pincode:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->pincode) }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>Contact No:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->contact_no) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Alternate Contact:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->alternate_contact_no) }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>Aadhaar No:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->aadhar_card_no) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Details:</strong>
                        </th>
                        <th style="width: 300px;" colspan="3">
                            <strong>{{ ucwords($application->advertise_detail) }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>Advertise Type:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->advertise_type) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Banner Size:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ $application?->length." * ".$application?->width }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>Ward:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->ward->name) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>Location:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->location) }} </strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100px;">
                            <strong>From Date:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->from_date) }} </strong>
                        </th>
                        <th style="width: 100px;">
                            <strong>To Date:</strong>
                        </th>
                        <th style="width: 220px;">
                            <strong>{{ ucwords($application->to_date) }} </strong>
                        </th>
                    </tr>

                </thead>
            </table>

            <table class="marathi-table">
                <thead>
                    <tr>
                        <th style="width: 70%;">
                            <strong>१) वरील जाहिरात फलकाचा मुदत ३ दिवस राहील.</strong>
                        </th>
                        <th style="width: 30%; text-align: right" rowspan="3">
                            <img src="{{ $qr_code }}" alt="" style="width:150px; height:150px; border: 1px solid #ccc">
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 70%;">
                            <strong>२) सदर फलकाबाबत कोणतीही तक्रार पनवेल महानगरपालिका. कडे आल्यास व त्याप्रमाणे पनवेल महानगरपालिकेने आपणांस सदरचा फलक काढून घेणेबाबत कळविल्यास, आपण त्वरीत सदरचा फलक स्वखर्चाने काढून घ्यावयाचा आहे.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 70%;">
                            <strong>३) परवानगी दिलेल्या मोजमापाप्रमाणे जाहिरात फलक लावावा.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>४) जाहिरात फलकावरील रंग चकाकणारा व वाहन चालकाचे लक्ष वेधून घेणारा नसावा.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>५) जाहिरात फलकाची खालील बाजू जमिनीपासून १० फूट उंच असावी.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>६) जाहिरात फलकावर अश्लील मजकूर नसावा.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>७) सदर फलकामुळे रहादीस रस्ता रुंदीकरणास अडथळा होत असल्यास महापालिकेकडून आपणांस कळविण्यात आल्यास सदरचा जाहिरात फलक स्वखर्चाने काढून घेण्याची जबाबदारी आपणांवर राहील. तसेच आपणास देण्यात येणाऱ्या मुदतीमध्ये आपण जाहिरात फलक काढून घेतले नाही, तर सदरची कार्यवाही महानगरपालिकेकडून करण्यात येईल व त्यासाठी होणारा सर्व खर्च आपणाकडून वसूल करण्यात येईल.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>८) जाहिरात फलक लावणेस परवानगी देणेबाबत केंद्र शासन, राज्य शासन व महानगरपालिकेचे असलेले नियम व त्यामध्ये वेळोवेळी करण्यात येणान्या सुधारणा संबंधितावर बंधनकारक राहतील, या संदर्भात कोणत्याही नियमाचा भंग आपणाकडून करण्यात आल्यास आपल्या विरुध्द योगय ती कार्यवाही करण्यात येईल.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>९) सदर फलक लावतेवेळी काही दुर्घना घडल्यास त्याची संपूर्ण जबाबदारी आपणावर राहील.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>१०) सदर फलकाबाबत योग्यवेळी होणाऱ्या बदलाबाबत संपूर्ण अधिकारी महापालिकेचे असतील.</strong>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%;">
                            <strong>११) जाहिरात फलकावर धार्मिक जातीयवाद व विद्वेष निर्माण होईल असे व अश्लील मजकूर व छायाचित्र प्रसिध्द करता येणार नाही.</strong>
                        </th>
                    </tr>
                </thead>
            </table>


            <div style="width: 98%; margin: auto; margin-top: 40px; text-align: center; margin-bottom: 20px;">
                <strong>वरील अटी व शर्तीना अधीन राहून दि. {{ ucwords($application->from_date) }} पासून दि. {{ ucwords($application->to_date) }} पर्यंत आपणास जाहिरात फलकाची परवानगी देण्यास येते.</strong>
            </div>
        </div>
    </div>

</body>

</html>
