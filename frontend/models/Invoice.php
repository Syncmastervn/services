 <?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property int $invoiceID
 * @property int $customerID
 * @property int $userID
 * @property int $deposite_price
 * @property int $selling_price
 * @property int $weight_total
 * @property string $date_on
 * @property string $date_off
 * @property int $date_live
 * @property int $extended
 * @property int $status
 *
 * @property Customer $customer
 * @property User $user
 * @property InvoiceDetails[] $invoiceDetails
 * @property InvoiceLimit[] $invoiceLimits
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customerID', 'userID', 'deposite_price', 'selling_price', 'weight_total', 'date_live', 'status'], 'required'],
            [['customerID', 'userID', 'deposite_price', 'selling_price', 'weight_total', 'date_live', 'extended', 'status'], 'integer'],
            [['date_on', 'date_off'], 'safe'],
            [['customerID'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customerID' => 'customerID']],
            [['userID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userID' => 'userID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'invoiceID' => 'Invoice ID',
            'customerID' => 'Customer ID',
            'userID' => 'User ID',
            'deposite_price' => 'Deposite Price',
            'selling_price' => 'Selling Price',
            'weight_total' => 'Weight Total',
            'date_on' => 'Date On',
            'date_off' => 'Date Off',
            'date_live' => 'Date Live',
            'extended' => 'Extended',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customerID' => 'customerID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['userID' => 'userID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceDetails()
    {
        return $this->hasMany(InvoiceDetails::className(), ['invoiceID' => 'invoiceID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceLimits()
    {
        return $this->hasMany(InvoiceLimit::className(), ['invoiceID' => 'invoiceID']);
    }
}
